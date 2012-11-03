<?php
//创建验证码的范围
$upperChar = range('a','z');
$lowerChar = range('A','Z');
$number = range(1,9);
$team = array_merge($upperChar,$lowerChar,$number);
shuffle($team);
$text = array_slice($team,0,4);
// var_dump($text);

