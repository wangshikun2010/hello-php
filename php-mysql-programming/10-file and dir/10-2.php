<?php
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

//filetype()
echo filetype($url);
echo '<p>';

//fstat
function getTime($path) {
	return date('m-d-y g:i:sa', $path);
}

$fh = fopen($url, 'r');

$fileinfo = fstat($fh);

var_dump($fileinfo);

//stat()
var_dump(stat($url));

//readlink()
echo readlink($url);
echo '<p>';

