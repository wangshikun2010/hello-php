<?php
$string = "This is a test";
echo $string;
echo '<p>';

echo preg_replace('/is/', 'wang', $string);
echo '<p>';

echo preg_replace('/[a-z]/', '1', $string);
echo '<p>';

$num = 4;
$string = "This string has four words.";
$string = preg_replace('/four/', $num, $string);
echo $string;
echo '<p>';
