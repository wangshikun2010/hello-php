<?php
//file_exists()判断一个文件是否存在

$filename = "data.php";
if($filename) {
	echo $filename."文件存在";
} else {
	echo $filename."文件不存在！";
}