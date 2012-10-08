<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

function debug($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}