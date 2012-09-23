<?php
//output array
$status = array(
	"one" => array("oh" => "ohio", "pa" => "pennsylvania", "ny" => "new york"),
	"two" => array("zhang" => "ohio", "ahs" => "pennsylvania", "jsi" => "new york")
	);
echo $status["two"]["ahs"];
echo "<br/>";

print_r($status);

$number = array(0 => 123, 1 => 456, 2 => 789);

//without the array index
$num[] = 20;
$num[] = 30;
$num[] = 40;
echo $num[2];

//range function
$even = range(0,20);
var_dump($even);
print_r($even);
echo "<br/>";
$even = range(0, 50, 10);
print_r($even);
echo "<br/>";
$even = range("a","z");
print_r($even);
echo "<br/>";
$even = range("A","Z",3);
print_r($even);
echo "<br/>";


// File IO
// Will read the file string with "|" is divided into an array
$handle = fopen("data.txt", "r");
while(($line = fgets($handle, 4096)) !== false) {
	list($name,$occupation,$color) = explode("|",$line);
	echo "Name: $name<br/>";
	echo "occupation: $occupation<br/>";
	echo "color: $color<br/>";
	echo "<br/>";
}
fclose($handle);


echo "<pre>";
print_r(file("data.txt"));
echo "</pre>";