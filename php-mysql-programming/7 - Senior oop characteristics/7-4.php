<?php
/**
*Employee类一个员工信息
*/
class Employee {
	private $name;
	private $age;
	private $salary;
	private $years_employee;

	public function __construct($name) {
		$this->setName($name);
	}

	public function setName($name) {
		if (isset($name) === false) {
		 	echo '没有输入姓名!';
		} else {
			$this->name = $name;
		}
	}

	public function getName() {
		echo '员工姓名是: '.$this->name.'<p>';
	}
}

/**
* 管理人员
*/
class Executive extends Employee {
	public function __construct($name) {
		parent::__construct($name);
		$this->pillageCompany();
	}

	public function pillageCompany() {
		echo '这是管理人员<p>';
	}
}

/**
* CEO
*/
class Ceo extends Executive {
	public function __construct($name) {
		parent::__construct($name);
		// Executive::__construct();
		$this->getfacelift();
	}

	public function getfacelift() {
		echo '这是ceo<p>';
	}
}

$ceo = new Ceo('Jack');
$ceo->getName();
