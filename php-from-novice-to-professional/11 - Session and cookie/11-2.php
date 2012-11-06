<?php
session_start();
if (isset($_SESSION['count']) === false) {
	$_SESSION['count'] = 1;
} else {
	$_SESSION['count']++;
}
echo '你好,你已经浏览本网页第'.$_SESSION['count'].'次';