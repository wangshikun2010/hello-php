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
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="./css/reset.css">
</head>
<body>
<!--<div class="nav">
		<div class="nav-inner">
			<ul>
				<li class="li-1">Evernote</li>
				<li class="li-2"><a href="" title="Evernote">首页</a></li>
				<li class="li-3">
					<div class="btn-group">
						<button class="btn btn-small">Small action</button>
						<button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
 -->
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
						<li class="active"><a href="#">首页</a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a href="#">设置</a></li>
						<li class="divider-vertical"></li>
						<li><a href="#">用户</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div>

	<div class="search">
		<img src="./img/gajgja.jpg" title="Evernote" />
		<form class="form-search">
			<div class="input-append">
				<input type="text" class="span2 search-query">
				<button type="submit" class="btn">Search</button>
			</div>
			<button type="button" class="btn btn-primary">新建笔记</buttom>
		</form>
	</div>

	<div class="content">
		<div id="span-2">
            <div class="list">
            	<div class="theme">
            		<b class="caret" id="lcon1"></b>
            		<span>个人笔记本<span>
            		<b class="caret" id="lcon2"></b>
            	</div>
            	<ul class="lister">
            		<li class="list-style1"><a href="">所有个人笔记</a></li>
            		<li class="list-style2"><a href="">垃圾箱</a></li>
            	</ul>
            </div>
		</div>
		<div id="span-3">
		    <div class="list">
            	<div class="theme">
            		<span>标题<span>
            	</div>
            	<ul class="lister">
            		<li>
            			<a class="link" href="">第一条信息</a>
            			<a class="time" href="">时间</a>
            			<span class="detail">XXXXXXXX<span>
            		</li>
            	</ul>
            </div>
		</div>
		<div id="span-4">
			<div class="list">
            	<div class="theme">
            		<span>文章标题<span>
            	</div>
            	<form action="" method="post">
            		<textarea name="text" rows="20" cols="50">
            			内容
            		</textarea>
            	</form>
            </div>
		</div>
    </div>


<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>