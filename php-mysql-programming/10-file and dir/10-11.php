<?php
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$handle = fopen($url, 'r');
while (!feof($handle)) {
	echo fgets($handle, 1024);
}

fclose($handle);