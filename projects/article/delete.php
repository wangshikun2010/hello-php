<?php
require 'functions.php';

//删除指定id的文件
function detele_link($id) {
	$links = read_data();

	foreach ($links as $key => $link) {
		//如果要获取的id和参数相同
		if($id == $link['id']) {
			unset($links[$key]);
		}
	}

	$handle = fopen(DATA_FILE, 'w+');
	foreach ($links as $key => $link) {
		fputcsv($handle, $link);
	}
	fclose($handle);

	return $links;
}

detele_link($_GET['id']);

header('Location: index.php');

