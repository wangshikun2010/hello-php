<?php
// fread()
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$fh = fopen($url, 'r');

echo fread($fh, filesize($url));
fclose($fh);