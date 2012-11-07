<?php
/**
 * 定义一个抽象类
 */
abstract class Shape {
	abstract protected function get_area();
	abstract protected function get();
}


/**
* 使用抽象类计算正方形的面积
*/
class Rectangle extends Shape {
	private $width;
	private $height;

	public function __construct($width=0, $height=0) {
		$this->width = $width;
		$this->height = $height;
	}

	public function get_area() {
		echo ($this->width + $this->height) * 2;
	}

	public function get() {}
}

$tangle = new Rectangle(20,30);
$tangle->get_area();
