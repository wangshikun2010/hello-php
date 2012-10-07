<?php
//fgets函数读取一行文件的内容
$myfile = fopen("helloworld.php",'r');
while(!feof($myfile)) {
	$myline = fgets($myfile,255);
	echo $myline;
}
fclose($myfile);