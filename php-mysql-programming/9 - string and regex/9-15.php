<?php
// strstr()
$url = 'name@explame.com';

echo strstr($url, '@');
echo '<p>';

echo strstr($url, '@', true);
echo '<p>';

//substr()
$string = 'wang shi kun';
echo substr($string, 3);
echo '<p>';
echo substr($string, -5);
echo '<p>';

echo substr($string, 2, 6);
echo '<p>';

echo substr($string, 3, -5);
echo '<p>';

// substr_count()
$str = 'rugweguqngrvf';
echo substr_count($str, 'g');

//substr_replace()

$number = '12345619930323111';
echo substr_replace($number, 'aa', 2, 5);
echo '<p>';
echo substr_replace($number, 'aa', -7, -5);