<?php
//betermine the size of the array and uniqueness

//count()
$string = array("one","two","three");
echo count($string);

$number = array(1,2,3,array(4,5),6);
echo count($number);
echo count($number,1);

//array_count_values()
$str = array("wang","shi","kun","wang","one");
print_r(array_count_values($str));

//array_unique()
print_r(array_unique($str));

print_r($str);
