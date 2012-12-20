<?php

// Application Public Interface
require 'config.php';
require CLASS_DIR . 'collection.php';

$class = 'notebooks';
$method = 'list';
$response = array(
	'data' => null,
	'code' => null,
	'status' => true,
);

// debug(array_merge($_GET, $_POST));

// 确定请求哪个类, 默认为notebooks
if (isset($_GET['class'])) {
	$class = trim($_GET['class']);
	unset($_GET['class']);
}

// 确定请求哪个方法, 默认为list
if (isset($_GET['method'])) {
	$method = trim($_GET['method']);
	unset($_GET['method']);
}

$request = array_merge($_GET, $_POST);

// 加载请求的类, 调用请求的方法
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

debug($response); exit();

header('Content-type: application/json');
echo json_encode($response);
