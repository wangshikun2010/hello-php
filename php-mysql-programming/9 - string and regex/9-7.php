<?php

//确定字符串的长度
$string = 'wang shi kun';
echo '字符串'.$string.'长度为'.strlen($string);
echo '<p>';


//确定两个字符串是否相等
$string1 = 'abc';
$string2 = 'abc';
$string3 = 'ABC';

if (!strcmp($string1,$string2)) {
	echo $string1.'等于'.$string2;
	echo '<p>';
}

if (!strcasecmp($string1,$string3)){
	echo $string1.'等于'.$string3;
	echo '<p>';
}

echo strspn("42 is the answer to the 128th question.", "1234567890");
echo '<p>';
echo strspn("foo", "o", 1, 2);
echo '<p>';
$acceptSet = "aeiou";
$rejectSet  = "y";

$str1 ="a banana";
$str2 ="the bolivian navy on manuvers in the south pacific";

echo strspn($str1,$acceptSet);
echo '<p>';

echo strcspn($str2,$rejectSet);
echo '<p>';



