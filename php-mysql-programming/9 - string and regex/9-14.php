<?php
// 赋值:text='black'
$bodytag = str_replace('%body%', 'black', 'text=%body%');
echo $bodytag;
echo '<p>';

// 赋值: Hll Wrld f PHP
$vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
$onlyconsonants = str_replace($vowels, '', 'Hello World of PHP');
echo $onlyconsonants;
echo '<p>';

// 赋值: You should eat pizza, beer, and ice cream every day
$phrase  = 'You should eat fruits, vegetables, and fiber every day.';
$healthy = array('fruits', 'vegetables', 'fiber');
$yummy   = array('pizza', 'beer', 'ice cream');

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;
echo '<p>';

$str = str_replace('l', '', 'good golly miss molly!');
echo $str;
echo '<p>';


// 替换顺序
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<p>';

// 首先替换 \r\n 字符，因此它们不会被两次转换
$newstr = str_replace($order, $replace, $str);
echo $newstr.'<p>';

// 输出 F ，因为 A 被 B 替换，B 又被 C 替换，以此类推...
// 由于从左到右依次替换，最终 E 被 F 替换
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject).'<p>';

// 输出: apearpearle pear
// 由于上面提到的原因
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;

