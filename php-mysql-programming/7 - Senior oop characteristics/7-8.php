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

$isPublic = $method->isPublic() ? 'yes' : 'no';

printf('Is %s public: %s <br/>', $method->getName(), $isPublic);
printf('Total number of parameters: %d', $method->getNumberofParameters());