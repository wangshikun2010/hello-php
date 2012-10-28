<?php
//get_parent_class(object)返回所属类的父类名
class People {
	private $name;
	private $age;
}

class Child extends People {
	function Child() {
		echo get_parent_class($this);
	}
}

$Child = new Child();
echo get_parent_class($Child);
echo get_parent_class('Child');