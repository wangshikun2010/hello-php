<?php

define('DS', DIRECTORY_SEPARATOR);
define('CHAR_DATA_FILE', __DIR__ . DS . 'chars.csv');

//创建验证码的范围
$upperChar = range('a','z');
$lowerChar = range('A','Z');
$number = range(1,9);
$team = array_merge($upperChar,$lowerChar,$number);
shuffle($team);
$text = array_slice($team,0,4);
// var_dump($text);

function read_char() {
	$handle = fopen(CHAR_DATA_FILE,'r');

}


