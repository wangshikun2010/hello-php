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


$method = new ReflectionMethod('corporation','setTiecolor');
$parameters = $method->getParameters();
foreach ($parameters as $parameter) {
	echo $parameter->getName();
	echo '<p>';
}
