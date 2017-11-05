<?php

class Link {
	public $id;
	public $url;
	public $time;
	public $title;
	public $category_id;
	public $difficulty;

	public function __construct($link) {
		$this->id = isset($link['id']) ? $link['id'] : null;
		$this->url = $link['url'];
		$this->time = $link['time'];
		$this->title = $link['title'];
		$this->category_id = $link['category_id'];
		$this->difficulty = $link['difficulty'];
	}

}



// $link = new Link(array(
// 	'id' => '1',
// 	'url' => '2',
// 	'time' => '3',
// 	'title' => '4',
// 	'category_id' => '5',
// 	'difficulty' => '6',
// ));
// var_dump($link);
