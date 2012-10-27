<?php
//class_exists()判断一个类是否存在

require 'functions.php';
class Staff {
	public $name;
	public $age;
	public $sex;

	function display() {
		return $this->name;
	}
}

if(class_exists('Staff')) {
	echo 'Staff存在';
	echo '<p>';
	$people = new Staff();
	$people->name = 'zhangsan';
	$people->age = '30';
	$people->sex = '男';
	echo $people->display().'<p>';
}

if(class_exists('aff')) {
	echo 'aff存在';
}

class foo {
    function name() {
        echo "My name is ".get_class($this);
    }
}
$bar = new foo();
echo "Its name is ".get_class($bar);
echo "<p>";
$bar->name();

//get_class_methods()返回类中所有方法名的数组
debug(get_class_methods('foo'));

