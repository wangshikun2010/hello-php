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


$class = new ReflectionClass('corporation');

$methods = $class->getMethods();
// var_dump($methods);

foreach ($methods as $method) {
	echo $method->getName();
	echo '<p>';
}

$isAbstract = $class->isAbstract() ? 'yes' : 'no';
$isFinal = $class->isFinal() ? 'yes' : 'no';

echo 'Is class'.$class->getName().'Abstract: '.$isAbstract;
echo 'Is class'.$class->getName().'Final: '.$isFinal;
