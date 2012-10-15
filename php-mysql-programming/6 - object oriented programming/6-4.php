<?php
/*
	oop属性
	__set(property_name,value)
	新知识: 1.var表示public
			2.__set()函数修改或设置方法,此函数不是库函数,而是魔术方法
*/

class staff {
	var $name;
	function __set($propName,$propValue) {
		//echo "Nonexistent variable: \$$propName";
		$this->$propName = $propValue;
		//echo "<br/>";
		//echo $this->$propName;
	}
}

$employee = new staff();
$employee->name = "wang shi kun";
$employee->title = "NAME";
//echo $employee->name;
//echo "<br/>";
//在staff类中没有声明title字段,为什么不会报错
//声明在类上面, 表示向类设置1个属性的时候会调用,$title是声明的一个属性
// echo $employee->title;
// echo "<br/>";
// $employee->__set($employee->name,$employee->title);
// echo "<br>";
echo $employee->name;
echo "<br>";
echo $employee->title;