<?php
//php中数据处理--数组函数--合并数组

//array_merge()
$a = array(1,2,3,4,5);
$b = array(6,7,8,9,10);
echo "array \$a: ";
print_r($a);
echo "<p>";
echo "array \$b: ";
print_r($b);
echo "<p>";
echo "After the merger, the array: ";
print_r(array_merge($a,$b));
echo "<p>";

$c = array("a" => "a", "b" => "b", "c" => "c");
$d = array("a" => "d", "b" => "e", "c" => "f");
echo "array \$c: ";
print_r($c);
echo "<p>";
echo "array \$d: ";
print_r($d);
echo "<p>";
echo "After the merger, the array: ";
print_r(array_merge($c,$d));
echo "<p>";

$string1 = array(
		0 => array(1,2,3),
		1 => array(4,5,6),
		2 => array(7,8,9)
);
$string2 = array(
		0 => array("one","two","three"),
		1 => array("four","five","six"),
		2 => array("seven","eight","nine")
);
print_r($string1);
echo "<p>";
print_r($string2);
echo "<p>";
//print_r(array_merge($string,$string2));
