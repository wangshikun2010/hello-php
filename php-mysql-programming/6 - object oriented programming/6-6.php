<?php
/*
	创建自定义设置或者获取方法
*/

class staff {
	public $name;
	public function getName() {
		return $this->name;
	}
	public function setName() {
		$this->name = $name;
	}
}

$employee = new staff();
$employee->name = 'wang shi kun';
echo $employee->getName();
