<?php


$text = 'this is a test';
var_dump(preg_split('/ /', $text));
var_dump(preg_split('/s/', $text));

echo sql_regcase($text);

