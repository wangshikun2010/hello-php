<?php
class corporation {
	private $employeeid;
	private $tiecolor;

	public function setEmployeeID($employeeid) {
		$this->employeeid = $employeeid;
	}

	public function getEmployeeID() {
		return $this->employeeid;
	}

	public function setTiecolor($tiecolor) {
		$this->tiecolor = $tiecolor;
	}

	public function getTiecolor() {
		return $this->tiecolor;
	}
}

$employee1 = new corporation();
$employee1->setEmployeeID('zhan san');
$employee1->setTiecolor('red');

$employee2 = clone $employee1;
$employee2->setEmployeeID('li si');
$employee2->setTiecolor('blue');

echo $employee1->getEmployeeID().'<p>';
echo $employee1->getTiecolor().'<p>';
echo $employee2->getEmployeeID().'<p>';
echo $employee2->getTiecolor().'<p>';