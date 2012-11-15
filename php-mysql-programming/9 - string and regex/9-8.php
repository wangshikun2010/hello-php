<?php
//处理字符串的大小写

$string = 'www.BAIdu.Com';
echo $string.'<p>';

echo $string.'经过小写转换之后: '.strtolower($string);
echo '<p>';

echo $string.'经过大写转换之后: '.strtoupper($string);
echo '<p>';

$text = 'php is Embedded language';
echo $text.'<p>';

echo '将字符串的首字母变为大写: '.ucfirst($text);
echo '<p>';

echo '将字符串的每个单词的首字母变为大写: '.ucwords($text);


