<?php

error_reporting(E_ALL);
//strtok()
$string = 'This is php and javascript';
$tokens = ' ';
$tok = strtok($string, $tokens);

while($tok) {
	echo $tok.'<p>';
	$tok = strtok($tokens);
}

$first_token  = strtok('/something', '/');
$second_token = strtok('/');
var_dump($first_token, $second_token);

//parse_str()

$url = 'name=zhangsan&age=165&sex';
parse_str($url);

echo $name.'<p>';
echo $age.'<p>';
echo $sex.'<p>';

$str = "first=value&arr[]=foo bar&arr[]=baz";
parse_str($str);
echo $first.'<p>';
echo $arr[0].'<p>';
echo $arr[1].'<p>';

parse_str($str, $output);
echo $output['first'].'<p>';
echo $output['arr'][0].'<p>';
echo $output['arr'][1].'<p>';
