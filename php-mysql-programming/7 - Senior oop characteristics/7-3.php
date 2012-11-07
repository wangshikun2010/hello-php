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

	public function pillageCompany() {
		echo '这是管理人员<p>';
	}
}

/**
* CEO
*/
class Ceo extends Executive {
	public function getfacelift() {
		echo '这是ceo<p>';
	}
}

$exec = new Executive();
$ceo = new Ceo();

$exec->setName('张三');
$exec->getName();
$exec->pillageCompany();

$ceo->setName('Jack');
$ceo->getName();
$ceo->getfacelift();

