<?php
//basename()
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';
echo basename($url);
echo '<p>';
echo basename($url, '.php');
echo '<p>';

//dirname()
echo dirname($url);

//pathinfo()
var_dump(pathinfo($url));

//realpath()
echo realpath($url);
echo '<p>';
