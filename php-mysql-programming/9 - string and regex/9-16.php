<?php
//ltrim()
$text = "\t\tThese are a few words  ";
$hello  = "Hello World";
var_dump($text, $hello);

$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, "\t");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

//rtrim()
$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);

//trim()
$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);


// str_pad()
echo str_pad('php', 10).'and html';
echo '<p>';

echo str_pad('php', 5, 'w').'and html';
echo '<p>';

echo str_pad('php', 10, 'wang122345678').'and html';
echo '<p>';

echo str_pad('php', 5, 'w', STR_PAD_LEFT).'and html';
echo '<p>';

echo str_pad('php', 5, 'w', STR_PAD_RIGHT).'and html';
echo '<p>';

echo str_pad('php', 5, 'w', STR_PAD_BOTH).'and html';
echo '<p>';