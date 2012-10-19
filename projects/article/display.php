<?php
require 'config.php';
require "functions.php";

$links = read_data();
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
						<li><a href="index.php">已经添加链接</a></li>
						<p class="pull-right"><a href="add.php" class="btn btn-primary">添加</a></p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#HTML" data-toggle="tab">HTML</a></li>
			<li><a href="#CSS" data-toggle="tab">CSS</a></li>
			<li><a href="#Javascript" data-toggle="tab">Javascript</a></li>
			<li><a href="#PHP" data-toggle="tab">PHP</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="HTML">
				<div>
					<span>最新添加链接</span>
					<ul>
						<li><a href="<?php  ?>"><?php  ?></a></li>
					</ul>
				</div>
			</div>
			<div class="tab-pane" id="CSS"></div>
			<div class="tab-pane" id="Javascript"></div>
			<div class="tab-pane" id="PHP"></div>
		</div>
	</div>

<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>