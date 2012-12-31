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
					<button type="button" class="btn new-btn">新建笔记</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div id="span-2">
		<div class="list">
			<div class="notebook-title">
				<b class="caret"></b>
				<span>个人笔记本</span>
				<i class="icon-plus pull-right" id="add-notebook">&nbsp;</i>
			</div>
			<ul class="notebooks" id="notebook-list">
				<li class="notebook-item">
					<b class="icon"></b>
					<a href="" data-id="1">PHP</a>
					<span class="dropdown pull-right">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">管理<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li><a class="edit-notebook" tabindex="-1" href="javascript:void(0)">编辑</a></li>
							<li><a class="delete-notebook" tabindex="-1" href="javascript:void(0)">删除</a></li>
						</ul>
					</span>
				</li>
			</ul>
		</div>
	</div>
	<div id="span-3">
		<div class="list">
			<div class="notebook-title">
				<span>标题</span>
			</div>
			<ul class="notes">
				<li>
					<a class="link" href="">第一条信息</a>
					<a class="time" href="">时间</a>
					<span class="detail">XXXXXXXX</span>
				</li>
			</ul>
		</div>
	</div>
	<div id="span-4">
		<div class="list">
			<div class="notebook-title">
				<span>文章标题</span>
			</div>
			<form action="" method="post">
				<textarea name="text" rows="20" cols="50">
					内容
				</textarea>
			</form>
		</div>
	</div>
</div>

<!-- 添加笔记本对话框 -->
<div id="modal-add-notebook" class="modal hide fade">
<!--<form action="api.php?class=notebooks&method=add" method="post">
-->		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>添加笔记本</h3>
		</div>
		<div class="modal-body">
			<div class="control-group">
				<div class="controls">
					<input type="text" id="notebook-name" name="notebook-name" placeholder="新建笔记本">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:void(0)" class="btn" data-dismiss="modal">取消</a>
			<button id="btn-add-notebook"class="btn btn-primary">保存</button>
		</div>
<!--</form>-->
</div>

<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>