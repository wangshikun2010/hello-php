<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $application_name; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/reset.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#"><?php echo $application_name; ?></a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<a class="btn btn-small btn-primary" href="index.php">链接管理</a>
					<a class="btn btn-small btn-primary" href="category.php">分类管理</a>
					<a class="btn btn-small btn-info" href="add_link.php">添加链接</a>
					<a class="btn btn-small btn-info" href="add_category.php">添加分类</a>
					<a class="btn btn-small"href="display.php">选项卡模式</a>
				</ul>
			</div>
		</div>
	</div>
</div>
