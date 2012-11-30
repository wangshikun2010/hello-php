<?php
	require 'config.php';
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $application_name; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
	<link type="text/css" href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/reset.css" rel="stylesheet">
</head>
<body>
	<div class="navbar">
        <div class="navbar-inner">
           	<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Evernote</a>
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav">
						<li class="active"><a href="#">主页</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">用户<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">登入</a></li>
								<li><a href="#">登出</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div id="span2">
			<p>个人笔记本</p>
		</div>
		<div id="span3">3</div>
		<div id="span4">4</div>
    </div>


<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>