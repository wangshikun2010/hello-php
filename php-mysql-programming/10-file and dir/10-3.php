<?php
$url = '/htdocs/wangshikun-php/php-mysql-programming/10-file and dir/10-1.php';

//filesize()
echo filesize($url).'字节';
echo '<p>';

//disk_free_space()
echo '磁盘的可用空间'.disk_free_space('htdocs').'b';
echo '<p>';

//disk_total_space()
echo '磁盘的总空间'.disk_total_space('htdocs').'b';
echo '<p>';

$surplus = disk_total_space('htdocs') - disk_free_space('htdocs');
echo '磁盘的已用空间'.$surplus.'b';
echo '<p>';
