<?php
//public

class Visitor {
	public function greetVisitor() {
		echo "Hello<br/>";
	}

	function sayGoodbye() {
		echo "Goodbye<br/>";
	}
}

//在类的外部调用方法
Visitor::greetVisitor();
$Visitor = new Visitor();
$Visitor->sayGoodbye();

//protected
class Staff {
	private $ein;
	function __construct($ein) {
		if($this->verify_ein($ein)) {
			echo 'EIN verified. Finish';
		}
	}
	protected function verify_ein($ein) {
		return true;
	}
}
$employee = new Staff('123-45-6789');
