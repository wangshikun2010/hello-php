<?php
$string = 'this is a test';

if (preg_match('/a/', $string, $array)) {
	var_dump($array);
}


$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
var_dump($matches);


$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches);
var_dump($matches);