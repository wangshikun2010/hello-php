<?php
$cap = array("apple","banana","orange");
echo key($cap);
echo "<br/>";
print_r(each($cap));

$capitalic = array(
	"one" => "apple",
	"two" => "banana",
	"three" => "orange",
);

while($key = key($capitalic)) {
	echo $key."<br/>";
	next($capitalic);
}

