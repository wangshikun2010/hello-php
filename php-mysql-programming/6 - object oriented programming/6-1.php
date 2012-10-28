<?php
/**
 * add php class
 */

class staff {
	public $name;
	public $title;
	public $wage;
	public function colckIn() {
		echo "$this->name 上班时间: ".date("h:i:s");
	}
	public function colckOut() {
		echo "$this->name 下班时间: ".date("h:i:s");
	}

	function setName($name) {
		$this->name = $name;
	}

	function getName() {
		return $this->name;
	}
}

$employee = new staff();
$employee->name = "wang shi kun";
echo $employee->name;
echo "<br/>";
$employee->colckIn();
echo "<br/>";
$employee->colckOut();
echo "<br/>";
$employee->setName($employee->name);
echo $employee->getName();