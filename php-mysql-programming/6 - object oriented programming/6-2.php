<?php
//简单的类的声明

class SimpleClass {
	//成员声明
	public $var = "a default value";

	//方法声明
	public function displayVar() {
		echo $this->var, PHP_EOL;
	}
}

$var = new SimpleClass();
$var->displayVar();
