<?php
error_reporting(E_ALL);

//按值传递参数
function salestax($price,$tax) {
	$total = $price + ($price * $tax);
	echo "total cost : $total";
}
salestax(15,.075);
echo "<br/>";

//按引用传递参数
$cost = 20.00;
$tax = 0.05;
function calculate_cost(&$cost,$tax) {
	$cost = $cost + ($cost * $tax);
	$tax += 4;
}

calculate_cost($cost,$tax);
echo "\$tax is: ".($tax*100)."%<br/>";
echo "\$cost is: ".$cost."<br/>";

//默认参数值
function sales($price,$tax=20) {
	$total = $price + ($price * $tax);
	echo "total cost : $total";
}
sales(15);
echo "<br/>";

//可选参数
function calculate($price,$tax="") {
	$total = $price + ($price * $tax);
	echo "total cost : $total";
}
calculate(15);
echo "<br/>";

/**
 * func_get_args
 * func_get_argc
 * func_get_arg
 */

function sum() {
	$args = func_get_args();
	$sum = 0;
	foreach ($args as $key => $value) {
		$sum += $value;
	}

	return $sum;
}

function add() {
	if (func_get_argc() < 2) {
		trigger_error("Add need at least two parameters");
	}

}

// sum();
// sum(1);
// sum(1,2,3,4);