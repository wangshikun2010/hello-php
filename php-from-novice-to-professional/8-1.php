<?php
//判断一个文件是否存在
$filename = "./functions.php";
if(file_exists($filename)) {
	echo "指定文件".$filename."存在";
}else {
	echo "指定文件".$filename."不存在";
}

hello world