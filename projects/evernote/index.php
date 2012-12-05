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
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<img class="img1" src="./img/gajgja.jpg" title="Evernote"/>
				<ul class="nav">
					<li><a class="active" href="">首页</a></li>
				</ul>
				<div class="pull-right">
					<form class="form-search">
						<div class="input-append">
							<input type="text" class="span2 search-query">
							<button type="submit" class="btn">Search</button>
						</div>
						<button type="button" class="btn new-btn">新建笔记</buttom>
					</form>
				</div>
			</div>
		</div><!-- /navbar-inner -->
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
            		<li class="list-style1">
            			<b class="book"></b>
            			<a href="">所有个人笔记</a>
            			<b class="borders">
            				<b class="select">
                  				<ul class="aid">
                  					<li><a href="">编辑</a></li>
                  					<li><a href="">删除</a></li>
                  				</ul>
                                    </b>
            			</b>
            		</li>
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