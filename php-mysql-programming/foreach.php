<?php
//foreach循环


//foreach($array as $value)
$arr = array(1,2,3,4);
foreach ($arr as $value) {
	echo $value.",";
}
foreach ($arr as $value) {
	$value = $value * 2;
	echo $value.",";
}

echo "<br/>";

//foreach($array as $key => $value)
$arr1 = array(	"one",
			 	"two",
			 	"three"
			);
reset($arr1);
while (list($key, $value) = each($arr1)) {
    echo "Key: $key; Value: $value<br/>";
}

foreach ($arr1 as $key => $value) {
    echo "Key: $key; Value: $value<br/>";
}

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v<br/>";
}

//多维数组
$b = array(
		"one" => array(
			"one" => "1",
			"two" => "2",
			"three" => "3"
 		),
 		"two" => array(
 			"four" => "4",
 			"five" => "5",
 			"six" => "6"
 		)
);
foreach ($b as $key => $value) {
	echo $key."=>".$value."<br/>";
	foreach ($value as $key => $value2) {
		echo $key."=>".$value2."<br/>";
	}
}



