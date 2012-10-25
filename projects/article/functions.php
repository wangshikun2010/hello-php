<?php
require 'config.php';

//定义两个csv文件,用于存储链接和分类的数据
define('DS', DIRECTORY_SEPARATOR);
define('LINK_DATA_FILE', __DIR__ . DS . 'links.csv');
define('CATEGORY_DATA_FILE', __DIR__ . DS . 'categories.csv');

/**
 * @param  array $newlink 1条链接信息
 * @return bool       是否写入成功
 */
function write_link($newlink) {
	// 1. 先读取LINK_DATA_FILE中的所有链接信息
	$links = array_reverse(read_link());
	// debug($links);

	// 2. 将用户提交的$newlink合并到$links,$newlink是一条新添加的链接信息,$links是所有链接
	$find = false;

	foreach ($links as $key => $link) {
		if (
			// 编辑操作, 提交数据中有id字段
			// 新添加的链接编号
			(isset($newlink['id']) && $link['id'] == $newlink['id'])
			// 添加操作, 如果url重复, 则覆盖
			|| ($link['url'] === $newlink['url'])
		) {
			$find = true;
			$links[$key] = array_merge($link,$newlink);
			break;
		}
	}

	//如果是新添加的链接
	if ($find === false) {
		//使用id计数
		if(empty($links)) {
			$newlink['id'] = 1;
		} else {
			$newlink['id'] = $links[count($links)-1]['id']+1;
		}
		$links = array_reverse($links);
		array_push($links,$newlink);

	}

	// debug($links);
	// debug($newlink);
	// exit();

	// 3. 将合并后的信息重新写入文件
	$handle = fopen(LINK_DATA_FILE, 'w+');
	foreach ($links as $key => $link) {
		fputcsv($handle, $link);
	}
	fclose($handle);

	return $links;
}

/**
 * 将所有的添加记录读出来
 */
function read_link($id = null) {
	global $link_fields;
	//$keys是以$link_fields的键组成的数组
	$keys = array_keys($link_fields);

	$links = array();

	if (!file_exists(LINK_DATA_FILE)) {
		return $links;
	}

	// 读取所有link
	$handle = fopen(LINK_DATA_FILE, 'r');
	while (($values = fgetcsv($handle, 4096, ",")) !== false) {
		$links[] = array_combine($keys, $values);
	}
	fclose($handle);

	// 如果只读取1条
	if ($id !== null) {
		foreach ($links as $key => $link) {
			if ($link['id'] == $id) {
				return $link;
			}
		}
		return null;
	}

	$links = array_reverse($links);

	return $links;
}

//删除指定id的链接
function delete_link($id = null, $category_id = null) {
	$links = read_link();

	foreach ($links as $key => $link) {
		//如果要获取的id和参数相同
		if(isset($id) && $id == $link['id']) {
			unset($links[$key]);
		}

		if(isset($category_id) && $category_id == $link['category_id']) {
			unset($links[$key]);
		}
	}

	$handle = fopen(LINK_DATA_FILE, 'w+');
	foreach ($links as $key => $link) {
		fputcsv($handle, $link);
	}
	fclose($handle);

	return $links;
}


/**
 * 读取分类数据, 支持读取1条
 * @param  int $id 分类ID
 * @return mixed
 */
function read_category($id = null) {
	global $category_fields;
	//$keys是以$category_fields的键组成的数组
	$keys = array_keys($category_fields);

	$categories = array();

	if (!file_exists(CATEGORY_DATA_FILE)) {
		return $categories;
	}

	// 读取所有link
	$handle = fopen(CATEGORY_DATA_FILE, 'r');
	while (($values = fgetcsv($handle, 4096, ",")) !== false) {
		$categories[] = array_combine($keys, $values);
	}
	fclose($handle);

	// 如果只读取1条
	if ($id !== null) {
		foreach ($categories as $key => $category) {
			if ($category['id'] == $id) {
				return $category;
			}
		}
		return null;
	}

	$categories = array_reverse($categories);

	return $categories;
}

/**
 * @param  array $new_category 写入新的类
 * @return array               写入类的数组
 */
function write_category($new_category) {
	// 1. 先读取LINK_DATA_FILE中的所有链接分类信息
	$categories = array_reverse(read_category());
	//debug($categories);

	// 2. 将用户提交的$new_category合并到$categories,$category是一个分类信息,$categories是所有分类
	$find = false;

	foreach ($categories as $key => $category) {
		if (
			// 编辑操作, 提交数据中有id字段
			(isset($new_category['id']) && $categories['id'] == $new_category['id'])
			// 添加操作, 如果url重复, 则覆盖
			|| ($category['name'] === $new_category['name'])
		) {
			$find = true;
			$categories[$key] = array_merge($category,$new_category);
			break;
		}
	}

	//如果是新添加的分类
	if ($find === false) {
		//使用id计数
		if(empty($categories)) {
			$new_category['id'] = 1;
		} else {
			$new_category['id'] = $categories[count($categories)-1]['id']+1;
		}
		array_push($categories,$new_category);
	}

	$handle = fopen(CATEGORY_DATA_FILE, 'w+');
	foreach ($categories as $key => $category) {
		fputcsv($handle, $category);
	}
	fclose($handle);

	return $categories;
}

/**
 * @param  array $id 要删除的分类的编号
 * @return array     没有删除的分类
 */
function delete_category($id) {
	$categories = read_category();

	foreach ($categories as $key => $category) {
		//如果要获取的id和参数相同
		if($id == $category['id']) {
			unset($categories[$key]);
		}
	}

	$handle = fopen(CATEGORY_DATA_FILE, 'w+');
	foreach ($categories as $key => $category) {
		fputcsv($handle, $category);
	}
	fclose($handle);

	// 删除对应的链接
	delete_link(null,$id);

	return $categories;
}

/**
 * 构造分类id和分类名称的映射
 * @return array
 */
function read_category_map() {
	$categories = read_category();
	$category_map = array();

	foreach ($categories as $key => $category) {
		$category_map[$category['id']] = $category['name'];
	}

	return $category_map;
}

/**
 * Debug
 * @param  mixed $data
 * @return void
 */
function debug($data) {
	if (DEBUG === false) {
		return;
	}
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
