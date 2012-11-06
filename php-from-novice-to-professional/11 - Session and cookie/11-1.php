<?php
session_start();
$username1 = 'guset';

if (isset($_SESSION['username']) === false) {
	$_SESSION['username'] = $username1;
}
echo $_SESSION['username'];
session_destroy();