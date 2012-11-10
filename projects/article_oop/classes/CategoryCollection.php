<?php

// require "functions";

class CategoryCollection {
	private $filename;
	private $categories = array();

	public $keys = array(
		'time',
		'name',
		'id',
	);

	//__construct函数在在对象创建时自动调用
	public function __construct($filename) {
		$handle = fopen($filename, 'r');
		while (($values = fgetcsv($handle, 4096, ",")) !== false) {
			$category = new Category(array_combine($this->keys, $values));
			$this->categories[$category->id] = $category;
		}
		fclose($handle);

		ksort($this->categories);
		//var_dump($this->categories);

		//在此处赋值是在下面用
		$this->filename = $filename;
	}

	protected function save() {
		//var_dump($this->categories);
		$handle = fopen($this->filename, 'w');
		foreach ($this->categories as $key => $category) {
			//把category对象转换为一个数组
			$fields = array();
			foreach ($this->keys as $key) {
				$fields[$key] = $category->{$key};
			}
			fputcsv($handle, $fields);
		}
		fclose($handle);
	}

	/**
	 * 读取一条或者多条分类
	 * @param  key $id 一条分类的编号
	 * @return array     category
	 */
	public function read($id = null) {
		if ($id === null) {
			return $this->categories;
		}

		if (isset($this->categories[$id])) {
			return $this->categories[$id];
		}

		return null;
	}

	//添加一条分类
	public function add($category) {
		foreach ($this->categories as $id => $oldcategory) {
			if ($oldcategory->name === $category->name) {
				return 0;
			}
		}

		//为每个分类添加编号
		if (empty($this->categories)) {
			$category->id = 1;
		} else {
			$ids = array_keys($this->categories);
			$category->id = max($ids) + 1;
		}

		$this->categories[$category->id] = $category;

		$this->save();

		return $category->id;
	}

	//删除一条分类,$id是分类编号,$category_id是链接编号
	public function delete($id) {
		//删除一条分类
		if (isset($this->categories[$id])) {
			unset($this->categories[$id]);

			//删除分类下面的链接
			$collection = new LinkCollection(LINK_DATA_FILE);
			$links = $collection->read();
			foreach ($links as $key => $link) {
				if ($link->category_id == $id) {
					$collection->delete($link->id);
				}
			}

			$this->save();
			return true;
		}

		return false;
	}

	//编辑一条分类
	public function edit($id, $category) {
		if (isset($this->categories[$id])) {
			$this->categories[$id] = $category;
			$this->save();
			return true;
		}

		return false;
	}

	public function map() {
		$newcategory = array();
		foreach ($this->categories as $key => $category) {
			$newcategory[$category->id] = $category->name;
		}

		return $newcategory;
	}
}

// $collection = new CategoryCollection('../categories.csv');
// var_dump($collection->read());
// var_dump($collection->delete(2));
