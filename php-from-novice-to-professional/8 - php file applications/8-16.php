<?php

function debug($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

debug($_FILES); exit();

if($upfile == '') {
	echo "没有选择文件";
	echo "<p>";
	echo "点<a href=\"8-15.php\">这里</a>返回";
} else {
	$filepath = "images/";
	$filename = $filepath.$upfile_name;
	echo $upfile_name; //file name
	echo "<p>";
	echo $upfile_size; //file size
	echo "<p>";
	echo $upfile_type; //file type

	if(copy($upfile,$filename)) {
		unlink($upfile);
		echo "<p>";
		echo "指点文件上传成功！";
		echo "<p>";
		echo "点<a href=\"8-15.php\">这里</a>返回";
	} else {
		echo "文件上传失败！";
	}
}