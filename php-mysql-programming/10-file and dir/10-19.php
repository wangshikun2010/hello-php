<?php
$out = array(1, 2);
$a = exec("dir",$out,$status);
var_dump($a);
var_dump($out);
var_dump($status);

$b = system('dir', $status1);
var_dump($b);
var_dump($status1);

var_dump(passthru('dir'));

