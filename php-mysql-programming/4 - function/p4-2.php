<?php
//返回一个值
function salestax($price,$tax) {
	$total = $price + ($price * $tax);
	return $total;
}

$price = 20;
$tax = 30;
echo salestax($price,$tax);

//返回多个值
$color = array("red","blue","green");
list($red,$blue,$green) = $color;
echo "<br/>\$red = $red,\$blue = $blue,\$green = $green";

function users() {
	$user[] = "wang";
	$user[] = "shi";
	$user[] = "kun";
	return $user;
}

list($one,$two,$three) = users();
echo "<br/>\$one = $one, \$two = $two, \$three = $three<br/>";

//嵌套函数
function number($price,$tax) {
	function convert_pound($dollars,$conversion=1.6) {
		return $dollars * $conversion;
	}
	$total = $price + ($price * $tax);
	echo "Total cost in dollars: $total. Cost in british pounds: ".convert_pound($total)."<br/>";
}

number(15.00,.075);
echo convert_pound(15);

/**
 * compact: 根据现有的变量构造1个数组
 * extract: 将关联数组中的键值导出为变量
 */

function get_user() {
	$name = "wangshikun";
	$age = 21;

	return compact("name", "age");
	return array(
		"name" => $name,
		"age" => $age,
	);
}

$user = get_user();
extract($user);

// extract(get_user());
// $name =
// $age =