<?php
//构造函数
class book {
	private $title;
	private $isbn;
	private $copies;

	public function __construct($isbn) {
		$this->setIsbn($isbn);
		$this->getTitle();
		$this->getNumberCapies();
		$this->getIsbn();
	}

	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}

	public function getIsbn() {
		echo $this->isbn;
	}

	public function getTitle() {
		$this->title = 'book';
		echo 'Title: '.$this->title.'<br/>';
	}

	public function getNumberCapies() {
		$this->copies = '5';
		echo 'Number copies available: '.$this->copies.'<br/>';
	}
}

$book = new book('15425141');
