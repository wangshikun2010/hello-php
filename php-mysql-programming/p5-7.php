<?php
error_reporting(E_ALL);
//合并，拆分，结合，分解数组

//array_comblne()
echo "<b>array_comblne合并两个数组,第一个数组表示键，第二个数组表示值：</b><br/>";
$abbreviations = array("a","b","c","d");
$number = array(1,2,3,4);
$status = array("one","two","three","four");
$sta = array_combine($abbreviations,$status);
$num = array_combine($number,$status);
print_r($sta);
echo "<br/>";
print_r($num);
echo "<br/><br/>";

//array_merge()
echo "<b>array_merge将数组追加到一起，返回一个联合的数组：</b><br/>";
$face = array("J","Q","K","A");
$number1 = array("2","3","4","5","6","7","8","9");
$cards = array_merge($face,$number1);
print_r($cards);
echo "<br/>";
shuffle($cards);
print_r($cards);
echo "<br/>";
$a1 = array("a" => "Horse","b" => "Dog");
$a2 = array("c" => "Cow","b" => "Cat");
print_r(array_merge($a1,$a2));
echo "<br/>";
$a = array(3 => "Horse",4 => "Dog");
print_r(array_merge($a));
echo "<br/><br/>";

//array_merge_recursive()
echo "<b>array_merge_recursive将数组追加在一起,将键名相同的在合并成一个数组: </b><br/>";
$class1 = array("one" => 100, "two" => 200);
$class2 = array("three" => 300, "one" => 100);
$classSource = array_merge_recursive($class1,$class2);
print_r($classSource);
echo "<br/>";

$class3 = array("one" => 100, "two" => 200);
$class4 = array("three" => 300, "four" => 100);
$classSource1 = array_merge_recursive($class3,$class4);
print_r($classSource1);
echo "<br/>";

$class5 = array(100,200,300);
$class6 = array("four","five","six");
$classSource2 = array_merge_recursive($class5,$class6);
print_r($classSource2);
echo "<br/><br/>";

//array_slice()
echo "<b>array_slice返回数组中指定一部分元素: </b><br/>";
$status = array("Alabama","Alaska","Arizona","Arkansas","Cailfornia","Colorado","Conetticut");
$subset = array_slice($status,4);
print_r($subset);
echo "<br/>";
$subset1 = array_slice($status,-4);
print_r($subset1);
echo "<br/>";
$subset2 = array_slice($status,4,-2);
print_r($subset2);
echo "<br/><br/>";

//array_splice()
echo "<b>array_splice返回数组中删除的元素: </b><br/>";
$status = array("Alabama","Alaska","Arizona","Arkansas","Cailfornia","Colorado","Conetticut");
$subset = array_splice($status,4);
print_r($subset);
echo "<br/>";
print_r($status);
echo "<br/>";
$status = array("Alabama","Alaska","Arizona","Arkansas","Cailfornia","Colorado","Conetticut");
$subset = array_splice($status,2,-1,array("zhang","wang"));
print_r($subset);
echo "<br/>";
print_r($status);
echo "<br/><br/>";

//array_intersect()
echo "<b>array_intersect函数返回第一个数组与所有数组相同的值：</b><br/>";
$array1 = array(1,2,3,4);
$array2 = array(3,2,4,6);
$array3 = array(5,2,3,5);
$intersection = array_intersect($array1, $array2,$array3);
$intersection1 = array_intersect($array1,$array2);
print_r($intersection);
echo "<br/>";
print_r($intersection1);
echo "<br/><br/>";

//array_intersect_assoc()
echo "<b>array_intersect_assoc函数返回第一个数组与所有数组相同的键/值：</b><br/>";
$array1 = array("o" => "assoc", "i" => "switch", "s" => "string");
$array2 = array("ol" => "one", "i" => "switch", "12" => "int");
$array3 = array("o" => "assoc", "i" => "switch", "s" => "string");
$intersection = array_intersect_assoc($array1,$array2,$array3);
print_r($intersection);
echo "<br/><br/>";

//array_diff()
echo "<b>array_diff函数返回第一个数组与所有数组不同的值：</b><br/>";
$array1 = array(1,2,3,4);
$array2 = array(3,2,4,6);
$array3 = array(5,2,3,5);
$diff = array_diff($array1,$array2,$array3);
print_r($diff);
echo "<br/><br/>";

//array_diff_assoc()
echo "<b>array_intersect_assoc函数返回第一个数组与所有数组不同的键/值：</b><br/>";
$array1 = array("o" => "assoc", "i" => "switch", "s" => "string");
$array2 = array("ol" => "one", "i" => "switch", "12" => "int");
$array3 = array("o" => "assoc", "i" => "switch", "1s" => "string");
$intersection = array_diff_assoc($array1,$array2,$array3);
print_r($intersection);
echo "<br/><br/>";









