<?php

class Book {
	public $title;
	public $author;
	public $pageNumber;

	public function __construct($title, $author, $pageNumber) {
		$this->title = $title;
		$this->author = $author;
		$this->pageNumber = $pageNumber;
	}

	public function printBook() {
		printf("Title: %s<br>", $this->title);
		printf("Author: %s<br>", $this->author);
		printf("PageNumber: %s<br>", $this->pageNumber);
	}
}

$php_mysql = new Book(
	"PHP MySQL",
	"author",
	620
);

$php_mysql->printBook();