<?php

define('DS', DIRECTORY_SEPARATOR);
define('DATA_FILE', __DIR__ . DS . 'article_data.csv');

/**
 * @param  array $link 1条链接信息
 * @return bool       是否写入成功
 */
function write_data($newlink) {
	// 1. 先读取DATA_FILE中的所有链接信息
	$links = read_data();

	// 2. 将用户提交的$link合并到$links,$link是一个链接信息,$links是所有学生信息
	array_push($links,$newlink);

	// 3. 将合并后的信息重新写入文件
	$handle = fopen(DATA_FILE, 'w+');
	foreach ($links as $key => $link) {
		fputcsv($handle, $link);
	}
	fclose($handle);

	return $links;
}

/**
 * 将所有的添加记录读出来
 */
function read_data() {
	$keys = array(
		'time',
		'title',
		'link',
		'index'
	);

	$links = array();

	if (!file_exists(DATA_FILE)) {
		return null;
	}

	$handle = fopen(DATA_FILE, 'r');
	while (($values = fgetcsv($handle, 4096, ",")) !== false) {
		$links[] = array_combine($keys, $values);
	}
	fclose($handle);

	return $links;
}

/**
 * Debug
 * @param  mixed $data
 * @return void
 */
function debug($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}