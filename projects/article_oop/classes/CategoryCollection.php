<?php
class CategoryCollection {
	private $filename;
	private $categories = array();

	public $keys = array(
		'time',
		'name',
		'id',
	);

	public function __construct($filename) {
		$handle = fopen($filename, 'r');
		while (($values = fgetcsv($handle, 4096, ",")) !== false) {
			$category = new Category(array_combine($this->keys, $values));
			$this->categories[$category->id] = $category;
		}
		fclose($handle);

		ksort($this->categories);
		// var_dump($this->categories);

		$this->filename = $filename;
	}

	protected function save() {
		// var_dump($this->categories);
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
	 * 读取一条或者多条链接
	 * @param  key $id 一条链接的编号
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

	//添加一条链接
	public function add($category) {
		foreach ($this->categories as $id => $oldcategory) {
			if ($oldcategory->name === $category->name) {
				return 0;
			}
		}

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

	//删除一条链接
	public function delete($id) {
		if (isset($this->categories[$id])) {
			unset($this->categories[$id]);
			$this->save();
			return true;
		}

		return false;
	}

	//编辑一条链接
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