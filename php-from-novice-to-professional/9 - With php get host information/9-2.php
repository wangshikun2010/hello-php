<?php
/*
	判断浏览器的使用类型
	获取用户的IP地址
*/

echo $_SERVER['HTTP_USER_AGENT'];
echo '<p>';

if(strstr($_SERVER['HTTP_USER_AGENT'],'Chrome')) {
	echo '浏览器的类型为: ';
	echo 'Chrome';
}

echo 'IP地址是: ';
echo '<p>';
echo $_SERVER['REMOTE_ADDR'];

