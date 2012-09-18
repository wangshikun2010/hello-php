<?php
//type casting
$variable1 = 13;
$variable2 = (float) $variable1;
echo $variable2;
echo "<br/>";

$sum1 = 4.7;
$sum2 = 5;
$sum3 = (int)$sum1 + $sum2;
echo $sum3;
echo "<br/>";

$number = 20;
$arr = (array) $number;
echo $arr[0];
echo "<br/>";

$array = array(2,5,3);
$number1 = 50;
for ($i=0; $i<count($array); $i++) {
	echo $array[$i];
	echo "<br/>";
}
$array = (array) $number1;
for ($i=0; $i<count($array); $i++) {
	echo $array[$i];
	echo "<br/>";
}
echo $array[0];
echo "<p>";

$sentence = "wang shi kun";
echo (int) $sentence;
echo "<p>";

$sentence1 = 20;
echo (string) $sentence1;
echo "<br/>";

$model = "wang shi kun";
$obj = (object) $model;
echo $obj->scalar;

