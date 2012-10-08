<?php
//file()函数将整个文件的内容读入到数组变量中

$filename = "data.php";
$myfile = file($filename);

for($i=0; $i<count($myfile); $i++) {
	echo $myfile[$i];
}