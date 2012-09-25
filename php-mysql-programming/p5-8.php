<?php
//array_rand()
echo "<b>array_rand函数返回从数组中随机抽取的一个或多个元素：</b><br/>";
$a = array("a" => "dog", "b" => "cat", "c" => "horse");
print_r(array_rand($a,1));
echo "<br/>";
print_r(array_rand($a,2));
echo "<br/><br/>";

//shuffle()
echo "<b>shuffle函数对数组中的元素随机重新排列：</b><br/>";
$cards = array(1,2,3,4,5,6,7,8,9,10);
shuffle($cards);
print_r($cards);
echo "<br/><br/>";

//array_sum()
echo "<b>array_sum函数对数组中的元素求和：</b><br/>";
$grades = array(42,"5hello","42");
print array_sum($grades);
echo "<br/><br/>";

//array_chunk()
echo "<b>array_chunk将一个数组分解为多个数组：</b><br/>";
$string = array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");
print_r(array_chunk($string,4));
echo "<br/>";
shuffle($string);
var_dump(array_chunk($string,3,true));
$string1 = array("a" => "one", "b" => "two", "c" => "three", "d" => "four", "e" => "five");
var_dump(array_chunk($string1,4,true));
$string2 = array("a" => "one", "b" => "two", "c" => "three", "d" => "four", "e" => "five");
shuffle($string2);
var_dump(array_chunk($string2,4,true));
