<?php
//fgetcsv()
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$handle = fopen($url, 'r');
$data = array();
while(fgetcsv($handle, 1024, ' ') !== false) {
	$data[] = fgetcsv($handle, 1024, ' ');
}
var_dump($data);
fclose($handle);