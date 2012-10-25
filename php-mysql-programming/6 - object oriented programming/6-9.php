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
	}

	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}
}
