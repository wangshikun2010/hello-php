<?php
//php数据处理--数组函数--计算元素的个数

$array = array(1,2,3,4,5);
$array1 = array(
		0 => "zero",
		1 => "one",
		2 => "two"
);
$array2 = array(
	"name" => "wang shi kun",
	"sex" => "man",
	"age" => "19"
);

echo "数组1的元素个数：";
echo count($array);
echo "<p>";
echo "数组2的元素个数：";
echo count($array1);
echo "<p>";
echo "数组3的元素个数：";
echo count($array2);
