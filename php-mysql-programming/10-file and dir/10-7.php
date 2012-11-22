<?php
//查看是否到了文件的末尾
$file_name = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$file = fopen($file_name, 'r');

while(!feof($file)) {
	echo fgets($file);
}

fclose($file);