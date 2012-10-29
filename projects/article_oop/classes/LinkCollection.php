<?php
// require 'Link.php';

class LinkCollection {
	private $filename;
	private $links = array();

	public $keys = array(
		'time',
		'title',
		'url',
		'difficulty',
		'category_id',
		'id',
	);

	public function __construct($filename) {
		$handle = fopen($filename, 'r');
		while (($values = fgetcsv($handle, 4096, ",")) !== false) {
			$link = new Link(array_combine($this->keys, $values));
			$this->links[$link->id] = $link;
		}
		fclose($handle);

		ksort($this->links);
		// var_dump($this->links);

		$this->filename = $filename;
	}

	protected function save() {
		// var_dump($this->links);
		$handle = fopen($this->filename, 'w');
		foreach ($this->links as $key => $link) {
			//把link对象转换为一个数组
			$fields = array();
			foreach ($this->keys as $key) {
				$fields[$key] = $link->{$key};
			}
			fputcsv($handle, $fields);
		}
		fclose($handle);
	}

	/**
	 * 读取一条或者多条链接
	 * @param  key $id 一条链接的编号
	 * @return array     link
	 */
	public function read($id = null) {
		if ($id === null) {
			return $this->links;
		}


		if (isset($this->links[$id])) {
			return $this->links[$id];
		}

		return null;
	}

	//添加一条链接
	public function add($link) {
		foreach ($this->links as $id => $oldlink) {
			if ($oldlink->url === $link->url) {
				return 0;
			}
		}

		if (empty($this->links)) {
			$link->id = 1;
		} else {
			$ids = array_keys($this->links);
			$link->id = max($ids) + 1;
		}

		$this->links[$link->id] = $link;

		$this->save();

		return $link->id;
	}

	//删除一条链接
	public function delete($id) {
		if (isset($this->links[$id])) {
			unset($this->links[$id]);
			$this->save();
			return true;
		}

		return false;
	}

	//编辑一条链接
	public function edit($id, $link) {
		if (isset($this->links[$id])) {
			$this->links[$id] = $link;
			$this->save();
			return true;
		}

		return false;
	}
}

// $collection = new LinkCollection('../links.csv');
// var_dump($collection->read());
// var_dump($collection->read('1'));
// var_dump($collection->read(1));
// var_dump($collection->read('2'));
//var_dump($collection->delete(1));


// var_dump($collection->add(new Link(array(
// 	'url' => '2',
// 	'time' => '3',
// 	'title' => '4',
// 	'category_id' => '5',
// 	'difficulty' => '6',
// ))));

// var_dump($collection->read());

// $link = $collection->read(3);
// $link->title = 'title';
// var_dump($collection->edit(3, $link));
// var_dump($collection->read());
