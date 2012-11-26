<?php
date_default_timezone_set('PRC');
$filename = 'touch.php';

if (!is_file($filename) && !file_exists($filename)) {
	echo $filename.'不存在<p>';
	echo '正在创建';
	touch($filename);
} else {
	echo $filename.'创建成功';
	echo '<p>';
}
echo '文件的最后访问时间: '.date("Y-n-j G:i:s", fileatime($filename));
echo '<p>';
echo '文件的最后修改时间: '.date("Y-n-j G:i:s", filemtime($filename));
echo '<p>';

touch($filename, '123345555', '1255163637');

echo '文件的最后访问时间: '.date("Y-n-j G:i:s", fileatime($filename));
echo '<p>';
echo '文件的最后修改时间: '.date("Y-n-j G:i:s", filemtime($filename));
echo '<p>';
