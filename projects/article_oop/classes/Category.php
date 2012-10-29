<?php
class Category {
	public $id;
	public $name;
	public $time;

	public function __construct($category) {
		$this->id = isset($category['id']) ? $category['id'] : null;
		$this->name = $category['name'];
		$this->time = $category['time'];
	}
}

// $category = new Category(array(
// 	// 'id' => 'one',
// 	'name' => 'two',
// 	'time' => 'three',
// ));

// var_dump($category);