<?php
//读取整个文件
//file()
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$file = file($url);

foreach ($file as $key => $value) {
	echo '第'.$key.'行: '.htmlspecialchars($value).'<br>';
}

var_dump($file);

//file_get_contents()

echo file_get_contents($url);
var_dump(file_get_contents($url));