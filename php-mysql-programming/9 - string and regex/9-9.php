<?php
//字符串与HTML相互之间的转换

$text = 'It is almost
 simple regular expression,
  it can precisely match
  this string';

echo $text.'<p>';

echo nl2br($text);
echo '<p>';

//为什么htmlentities()和htmlspecialchars()没有起作用?
$string = 'Coffee at ě';
echo $string;
echo '<p>';

echo htmlentities($string);

$str = "A 'quote' is <b>bold</b>";
echo '<p>';


echo htmlentities($str);
echo '<p>';

echo htmlentities($str, ENT_QUOTES);
echo '<p>';

echo htmlspecialchars($str);


