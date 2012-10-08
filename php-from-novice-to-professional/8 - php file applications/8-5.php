<?php
/*
 用读写方式写入文件
*/
$filename = 'data.php';
$myfile = fopen($filename,'r+');
fwrite($myfile,'hello world');
fgets($myfile,255);
fclose($myfile);