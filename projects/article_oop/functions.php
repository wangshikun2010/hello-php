<?php
require 'config.php';
require 'classes/Link.php';
require 'classes/LinkCollection.php';
require 'classes/Category.php';
require 'classes/CategoryCollection.php';

//定义两个csv文件,用于存储链接和分类的数据
define('DS', DIRECTORY_SEPARATOR);
define('LINK_DATA_FILE', __DIR__ . DS . 'links.csv');
define('CATEGORY_DATA_FILE', __DIR__ . DS . 'categories.csv');


/**
 * Debug
 * @param  mixed $data
 * @return void
 */
function debug($data) {
	if (DEBUG === false) {
		return;
	}
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
