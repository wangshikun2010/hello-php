<?php
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


