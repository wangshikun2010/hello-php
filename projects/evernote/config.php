<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('CLASS_DIR', ROOT . 'class' . DS);
define('DATA_DIR', ROOT . 'data' . DS);



$application_name = "evernote笔记本";

function debug($data) {
	var_dump($data);
}