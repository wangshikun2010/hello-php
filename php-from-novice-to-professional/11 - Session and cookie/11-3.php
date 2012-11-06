<?php
$name = $_GET['username'];
if (!$_GET['username']) {
	setcookie('username','');
	echo '用户名不存在';
} else {
	setcookie('username',$name);
	echo '注册成功,用户名为: '.$_COOKIE[username];
	echo '点击<a href="11-4.php">这里</a>注册';
}