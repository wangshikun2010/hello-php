<?php
//php数据处理--字符串函数--分割字符串

$s = "123|456|789";
$s2 = "|";
echo "字符串".$s."<br/>";
echo "使用explode方法分隔开：<br/>";
print_r(explode($s2,$s));
echo "<br/>";
print_r(explode($s2,$s,2));
echo "<p>";

$s1 = "123|456|789";
echo "字符串".$s."<br/>";
echo "使用split方法分隔开：<br/>";
print_r(str_split($s1));
echo "<br/>";
print_r(str_split($s1,3));

$string = "Hello world. Beautiful day today";
$token = strtok($string," ");

while($token) {
	echo $token." ";
	$token = strtok(" ");
}