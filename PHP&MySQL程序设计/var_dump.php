<?php
$a = 1;
$b = "t";
$c = true;
$d = 2.5;
var_dump($a,$b,$c,$d);
$list = array("wang","zhang","li","he");
var_dump($list);

echo var_export($a,$d);
var_export($list);
echo "<br/>";

$number = array(1,2,3);
print_r($list);
print_r($number);
echo "<br/>";
print_r($a);