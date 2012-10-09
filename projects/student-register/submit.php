<?php

debug($_POST);

define('DS', DIRECTORY_SEPARATOR);
$datafile = __DIR__ . DS . 'tmp' . DS . 'data.csv';
$handle = fopen($datafile, 'a+');
fputcsv($handle, $_POST);
fclose($handle);

function debug($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
?>
