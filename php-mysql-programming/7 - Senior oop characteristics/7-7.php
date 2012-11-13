<?php

abstract class Super {

	protected $property = null;

	abstract public function abstract_method();

	public function public_method() {}

}

class Child extends Super {
	public function abstract_method() {
		echo 'Implemented in Child Class', PHP_EOL;
	}
}

$instance = new Child();
$instance->abstract_method();