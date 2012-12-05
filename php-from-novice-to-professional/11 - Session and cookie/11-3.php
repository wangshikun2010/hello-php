<?php

if (isset($_COOKIE['username'])) {
	echo '恭喜您已经注册了, 用户名是:', $_COOKIE['username'], PHP_EOL;
} else if (isset($_GET['username'])) {
	setcookie('username', $_GET['username']);
	echo '恭喜, 注册成功, 请刷新后查看cookie内容', PHP_EOL;
} else {
	echo '您尚未注册', PHP_EOL;
	echo '点击<a href="11-4.php">这里</a>注册', PHP_EOL;
}