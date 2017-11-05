<?php
$application_name = "优秀文章的链接";

$difficulty = array(
	'1' => '☆',
	'2' => '☆☆',
	'3' => '☆☆☆',
	'4' => '☆☆☆☆',
	'5' => '☆☆☆☆☆'
);

// 链接的字段
$link_fields = array(
	'time' => '时间',
	'title' => '标题',
	'url' => '链接地址',
	'difficulty' => '难度指数',
	'category_id' => '所属分类',
	'id' => '编号',
);

// 分类的字段
$category_fields = array(
	'time' => '时间',
	'name' => '名称',
	'id' => '编号',
);

//获取当前本地时间
date_default_timezone_set('PRC');
$today = date("Y-n-j G:i:s");

// 是否打开调试模式
if (defined('DEBUG') === false) {
	define('DEBUG', true);
}

@session_start();
// session_destroy();