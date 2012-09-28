<?php
//php数据处理--字符串函数

//chop()
$string = "wang kun\n\n";
echo $string;
echo chop($string);
echo "<p>";

//ltrim()
$str = "\r\nHello World!";
echo "Without ltrim: ".$str;
echo "<br />";
echo "With ltrim: ".ltrim($str);
echo "<p>";

//md5(),md5函数之间转换时怎样算的？
$string2 = "Hello";
echo md5($string2);
if (md5($string2) == '8b1a9953c4611296a827abf8c47804d7') {
  	echo "<br/>Hello world!";
}
echo "<br/>";

//nl2br()
echo nl2br("wang \nshi kun");
echo "<p>";
echo nl2br("One line.\nAnother line.");
echo "<p>";

//str_replace
echo str_replace("a","1","abcdeaa",$i);
echo ",替换次数：".$i;
echo "<br/>";
$arr = array("blue","red","green","yellow");
print_r($arr);
echo "<br/>";
print_r(str_replace("red","pink",$arr,$i));
echo "Replacements: $i";
echo "<br/>";
$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello","world","!");
print_r(str_replace($find,$replace,$arr));
