<?php

define('DS', DIRECTORY_SEPARATOR);
$upload_dir = __DIR__ . DS . 'upload' . DS;
$allowed_extensions = array("jpg","png","jpeg","gif");

if (is_uploaded_file($_FILES['upfile']['tmp_name'])) {
	echo "检测到文件上传", $_FILES['upfile']['name'];
	$extension = pathinfo($_FILES['upfile']['name'],PATHINFO_EXTENSION);
	if (!in_array($extension, $allowed_extensions)) {
		echo "只允许上传图片文件";
		exit();
	}

	if (move_uploaded_file($_FILES['upfile']['tmp_name'], $upload_dir . $_FILES['upfile']['name'])) {
		echo "文件已移动到", $upload_dir, $_FILES['upfile']['name'];
		echo "<img src='upload/{$_FILES['upfile']['name']}'>";
	} else {
		echo "文件移动失败";
	}
} else {
	echo "没有上传文件";
}