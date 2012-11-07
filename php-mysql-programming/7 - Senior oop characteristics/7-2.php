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

	function __clone() {
		$this->tiecolor = 'blue';
	}
}


$employee1 = new corporation();
$employee1->setEmployeeID('12345');
$employee1->setTiecolor('red');

$employee2 = clone $employee1;
$employee2->setEmployeeID('678910');

echo $employee1->getEmployeeID().'<p>';
echo $employee1->getTiecolor().'<p>';
echo $employee2->getEmployeeID().'<p>';
echo $employee2->getTiecolor().'<p>';