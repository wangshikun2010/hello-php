<?php
//method_exists(object,method_name)检查一个对象中是否存在指定的方法

class People {
	private $name;

	function setName($name) {
		$this->name = $name;
	}
}

class Name extends People {
	function display() {
		echo 'name';
	}
}

$People = new People();
$Name = new Name();

var_dump(method_exists($People,'setName'));
var_dump(method_exists($Name,'display'));
var_dump(method_exists($People,'display'));
var_dump(method_exists($Name,'setName'));

