<?php
//php中数据处理--数组函数--合并数组

require_once "functions.php";


//array_merge()
$a = array(1,2,3,4,5);
$b = array(6,7,8,9,10);
echo "array \$a: ";
debug($a);
echo "<p>";
echo "array \$b: ";
debug($b);
echo "<p>";
echo "After the merger, the array: ";
debug(array_merge($a,$b));
echo "<p>";

$c = array("a" => "a", "b" => "b", "c" => "c");
$d = array("a" => "d", "b" => "e", "c" => "f");
echo "array \$c: ";
debug($c);
echo "<p>";
echo "array \$d: ";
debug($d);
echo "<p>";
echo "After the merger, the array: ";
debug(array_merge($c,$d));
echo "<p>";

$string1 = array(
		"one" => array(1,2,3,5),
		array(4,5,6),
		array(7,8,9)
);
$string2 = array(
		"one" => array(1,2,3,4),
		array("one","two","three"),
		array("four","five","six"),
		array("seven","eight","nine")
);
debug($string1);
echo "<p>";
debug($string2);
echo "<p>";
debug(array_merge_recursive($string1,$string2));


debug(array_unique(array_merge(array(1,2,3,5), array(1,2,3,4))));