<?php
//读取目录内容
$url = '/htdocs/wangshikun-php/php-mysql-programming/9 - string and regex';
$handle = opendir($url);

while(($file = readdir($handle)) !== false) {
	echo $file.'<br>';
}

closedir($handle);

var_dump(scandir($url));
var_dump(scandir($url, 1));