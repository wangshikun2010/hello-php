<?php
// strpos()
$substr = 'index';

$log = '192.168.1.11:/www/htdocs/index.html:[2006/02/03]';

$pos = strpos($log, $substr);
echo $pos;
echo '<p>';

$pos2 = strpos($log, 'html', $pos);
echo $pos2;
echo '<p>';

//stripos()
$pos3 = stripos($log, 'w', 10);
echo $pos3;
echo '<p>';


//strrpos()
$foo = "0123456789a123456789b123456789c";

var_dump(strrpos($foo, '7', -5));
var_dump(strrpos($foo, '7', 20));
