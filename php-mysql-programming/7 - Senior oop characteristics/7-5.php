<?php
/**
 * 定义一个接口
 */
interface Iname {
	const TOTAL = 2;
	function setName($name);
	function getName();
}

interface Iage {
	function setAge($age);
	function getAge();
}


/**
*Employee类一个员工信息
*/
class Employee implements Iname {
	private $name;

	public function __construct($name) {
		$this->setName($name);
		echo Employee::TOTAL;
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
 * 定义一个类必须实现Ipillage接口的方法
 */
class Ceo implements Iname, Iage {
	private $name;
	private $age;

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

	public function setAge($age) {
		if (isset($age) === false) {
		 	echo '没有输入年龄!';
		} else {
			$this->age = $age;
		}
	}

	public function getAge() {
		echo '员工年龄是: '.$this->age.'<p>';
	}
}

$employee = new Employee('zhang san');
$employee->getName();

$ceo = new Ceo();
$ceo->setName('wang ci');
$ceo->getName();
$ceo->setAge('123');
$ceo->getAge();