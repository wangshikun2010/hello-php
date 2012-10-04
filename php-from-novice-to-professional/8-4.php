<?php
//用写入方式打开文件

$filename = 'functions.php';
$myfile = fopen($filename,'w');
fwrite($myfile,'hello world');
fgets($myfile,255);
fclose($myfile);