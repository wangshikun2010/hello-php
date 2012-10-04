<?php
/*
 用读写方式写入文件
*/
$filename = '8-1.php';
$myfile = fopen($filename,'r+');
fwrite($myfile,'hello world');
fgets($myfile,255);
fclose($myfile);