<?php
//读取文件相应的字符

$myflie = fopen("data.php",'r');
while(!feof($myfile)) {
	$mychar = fgetc($myflie);
	echo $mychar;
}
fclose($myflie);