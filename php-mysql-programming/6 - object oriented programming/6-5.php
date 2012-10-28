<?php
/*
 	oop属性
 	__get(property_name)
 	新知识: 1.__get()函数表示访问或者获取方法,负责封装获得类变量的代码所需的代码
*/
class staff {

	function __get($propName) {
		echo "__get called<br/>";
		$vars = array('name','city');
		if(in_array($propName, $vars)) {
			return $this->propName;
		} else {
			echo "No such variable!";
		}
	}

	function __set($propName, $value) {
		var_dump(func_get_args());
		// $propName => $employee->name ????
		// $value => "wangshikun"
		echo "__set called<br/>";
		$vars = array('name','city');
		if(in_array($propName, $vars)) {
			$this->{$propName} = $value;
		} else {
			echo "No such variable!";
		}
	}
}

$employee = new staff();
$employee->name = "wang shi kun";
$name = $employee->name;

echo $employee->name.'<br/>';
echo $employee->age;

