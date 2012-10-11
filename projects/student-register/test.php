<?php
$item = array(
	'name' => 'wangshikun',
	'age' => 19,
);

$data = array();
for ($i=0; $i < 5; $i++) {
	$data[] = $item;
}

print_r($data);