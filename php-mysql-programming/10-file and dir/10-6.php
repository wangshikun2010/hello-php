<?php
$file_name = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';
$dir_name = '/htdocs/wangshikun-php/php-mysql-programming';

echo filegroup($file_name);
echo '<p>';
echo fileowner($file_name);
echo '<p>';

//确定文件是不是可执行文件
if(is_executable($file_name)) {
	echo $file_name.'存在并且是可执行文件';
	echo '<p>';
}

if(is_executable($dir_name)) {
	echo $dir_name.'存在并且是可执目录';
	echo '<p>';
}

//确定文件是不是可读文件
if(is_readable($file_name)) {
	echo $file_name.'是可读文件';
	echo '<p>';
}

if(is_readable($dir_name)) {
	echo $dir_name.'是可读目录';
	echo '<p>';
}

//确定文件是不是可写文件
if(is_writeable($file_name)) {
	echo $file_name.'是可写文件';
	echo '<p>';
}

if(is_writeable($dir_name)) {
	echo $dir_name.'是可写目录';
	echo '<p>';
}

