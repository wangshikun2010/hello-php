<?php
//count_chars()
$string = 'wang shi kun';
echo $string.'<p>';

foreach (count_chars($string, 1) as $key => $value) {
	echo chr($key).'出现了'.$value.'次<br>';
}

echo count_chars($string, 3);
echo '<p>';

//str_word_count()
$str = 'which antiword uses to format tables in its plain text output';
echo $str.'<p>';

echo '字符串中单词的数目是'.str_word_count($str);

var_dump(str_word_count($str, 1));
var_dump(str_word_count($str, 2));