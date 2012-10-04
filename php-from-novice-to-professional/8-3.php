<?php
/*
打开文件--用只读方式
*/
$filename = 'functions.php';
$myfile = fopen($filename,'r');
fwrite($myfile,'hello world');
fclose($myfile);
