<?php
// test array
$string = array(1,2,3);
$number = 20;
echo "\$string is an array: ".is_array($string)."<br/>";
echo "\$number is an array: ".is_array($number)."<br/>";

//Add and delete array element
//And the elements in the array at the end
$even = array(1,2,3);
array_push($even,4,5);
print_r($even);
echo "<br/>";

//Return the last element of the array
$status = array("one","two","three");
$statu = array_pop($status);
echo $statu."<br/>";

//Return the first element of the array
$statu = array_shift($status);
echo $statu."<br/>";

//the array of elements to head
array_unshift($status,"head","heads");
print_r($status);
echo "<br/>";

$str = array("the", "is", "heaf");
$str = array_pad($str,6,"add");
print_r($str);
echo "<br/>";
$str = array_pad($str,8,"s");
print_r($str);
