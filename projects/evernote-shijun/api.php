<?php

// Application Public Interface
require 'config.php';

$class = 'notebooks';
$method = 'list';
$response = array(
	'data' => null,
	'code' => null,
	'status' => true,
);

if (isset($_GET['class'])) {
	$class = trim($_GET['class']);
	unset($_GET['class']);
}

var_dump($class);

if (isset($_GET['method'])) {
	$method = trim($_GET['method']);
	unset($_GET['method']);
}

$request = array_merge($_GET, $_POST);

if (file_exists(CLASS_DIR . $class . '.php')) {
	include CLASS_DIR . $class . '.php';

	$object = new $class($request, $response);
	if (method_exists($object, $method)) {
		call_user_func(array($object, $method));
		$response = $object->response;
	} else {
		$response['code'] = 'Method not found';
		$response['status'] = false;
	}

} else {
	$response['code'] = 'Class not found';
	$response['status'] = false;
}

header('Content-type: application/json');
echo json_encode($response);
