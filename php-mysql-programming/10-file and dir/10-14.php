<?php
//移动文件指针
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

$handle = fopen($url, 'r');
//0
echo ftell($handle).'<p>';

fgets($handle, 1024);

//7
echo ftell($handle).'<p>';

//3
fseek($handle, 3, SEEK_SET);
echo ftell($handle).'<p>';

//6
fseek($handle, 3, SEEK_CUR);
echo ftell($handle).'<p>';

//307
fseek($handle, -3, SEEK_END);
echo ftell($handle).'<p>';


