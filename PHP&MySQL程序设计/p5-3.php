<?php
//in_array()
$integer = array(10,20,50);
if(in_array("10",$integer)) {
	echo "found";
}

if(in_array("10",$integer,1)) {
	echo "found";
}
echo "<br/>";

//array_keys()
$string = array("wang","shi","kun");
$keys = array_keys($string);
print_r($keys);
echo "<br/>";

$srtings["one"] = "shanghai";
$strings["two"] = "beijing";
$strings["three"] = "xian";
print_r(array_keys($strings));
echo "<br/>";
print_r(array_keys($strings,"xian"));
echo "<br/>";

//array_key_exists()
$even = array("one" => "1","two" => "2", "three" => "3");
if(array_key_exists("one", $even)) {
	echo "found";
}
echo "<br/>";

//array_values()
$even = array("one" => "123","two" => "456", "three" => "789");
print_r(array_values($even));
echo "<br>";

//array_search()
if(array_search("123", $even)) {
	echo "found";
}