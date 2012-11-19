<?php

$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';
date_default_timezone_set('PRC');

//fileatime()
echo '10-1.php最后的访问时间: '.date('Y-n-j G:i:s', fileatime($url));
echo '<p>';

//filectime()
echo '10-1.php最后的改变时间: '.date('Y-n-j G:i:s', filectime($url));
echo '<p>';

//filemtime()
echo '10-1.php最后的修改时间: '.date('Y-n-j G:i:s', filemtime($url));
echo '<p>';