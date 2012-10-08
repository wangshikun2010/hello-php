<?php
//sorting an array

//sort()
echo "<b>sort函数以升序排列: </b><br/>";
$grades = array(42,200,51,85,523);
sort($grades);
print_r($grades);
echo "<br/>";

$status = array("ang","shi","kun");
sort($status);
print_r($status);
echo "<br/><br/>";

//natsort()
echo "<b>natsort函数以自然顺序排列: </b><br/>";
$pictrue = array("pictrue1.jpg","pictrue2.jpg","pictrue20.jpg","pictrue10.jpg");
natsort($pictrue);
print_r($pictrue);
echo "<br/><br/>";

//natcasesort()
echo "<b>natcasesort函数以自然顺序排列，不区分大小写: </b><br/>";
$pictrue2 = array("PICTRUE1.jpg","pictrue2.jpg","Pictrue20.jpg","pictrue10.jpg");
natcasesort($pictrue2);
print_r($pictrue2);
echo "<br/><br/>";

//rsort()
echo "<b>sort函数以降序排列: </b><br/>";
rsort($grades);
print_r($grades);
echo "<br/>";
rsort($status);
print_r($status);
echo "<br/><br/>";

//asort()
echo "<b>asort函数以升序排列，保持键值关联: </b><br/>";
$my_array = array("a" => "Dog",
				  "b" => "Cat",
				  "c" => "Horse"
			);
asort($my_array);
print_r($my_array);
echo "<br/>";

$my_number = array(42,200,51,85,523);
asort($my_number);
print_r($my_number);
echo "<br/><br/>";

//array_multisort()
echo "<b>array_multisort同时对多个数组进行排序: </b><br/>";
$staff = array(
		 "0" => array("one","two","three"),
		 "1"=> array("wang","shi","kun")
	);
array_multisort($staff["0"],$staff["1"]);
print_r($staff);
echo "<br/>";
array_multisort($staff);
print_r($staff);
echo "<br/><br/>";

//arsort()
echo "<b>arsort函数以降序排列，保持键值关联: </b><br/>";
$my_array = array("a" => "Dog",
				  "b" => "Cat",
				  "c" => "Horse"
			);
arsort($my_array);
print_r($my_array);
echo "<br/><br/>";

//ksort()
echo "<b>ksort函数以键排列,顺序: </b><br/>";
$my_string = array("a" => "one",
				   "c" => "two",
				   "b" => "three"
	);
ksort($my_string);
print_r($my_string);
echo "<br/><br/>";

//krsort()
echo "<b>krsort函数以键排列，逆序: </b><br/>";
$my_string = array("a" => "one",
				   "c" => "two",
				   "b" => "three"
	);
krsort($my_string);
print_r($my_string);
echo "<br/><br/>";

//usort
echo "<b>usort函数使用用户自定义的函数对数组排序: </b><br/>";
function my_sort($a, $b) {
  	if ($a == $b) return 0;
  	return ($a > $b) ? -1 : 1;
}

$arr = array("one", "two","three","four","five", "six");
usort($arr, "my_sort");
print_r ($arr);






