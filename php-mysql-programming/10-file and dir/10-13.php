<?php
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$fh = fopen($url, 'r');

echo $url.'的大小为: '.readfile($url).'字节';
echo filesize($url);

fclose($fh);