<?php

$time = $_POST['time'];
if (!$_POST['username']) {
	echo '没有输入用户名';
} else {
	switch ($time) {
		case 1:
			$time = time();
			break;
		case 2:
			$time = time()+60*60*24;
			break;
		case 3:
			$time = time()+60*60*24*30;
			break;
		case 4:
			$time = time()+60*60*24*30*365;
			break;
	}
	setcookie('username',$_POST['username'],$time);

	echo '注册用户名为: '.$_COOKIE['username'];
	echo '<p>';
	echo '有效期为: ';
	switch ($_POST['time']) {
		case 1:
			echo '不保存';
			break;
		case 2:
			echo '保存一天';
			break;
		case 3:
			echo '保存一月';
			break;
		case 4:
			echo '保存一年';
			break;
	}
}
