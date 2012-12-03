<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title><?php echo APP_NAME; ?></title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/handlebars-1.0.rc.1.js"></script>
	<script type="text/javascript" src="js/api.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>

<!-- Begin page content -->
<div id="navbar" class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a href="javascript:void(0)" class="brand">Evernote</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li><a href="">分类</a></li>
					<li><a href="">标签</a></li>
				</ul>
			</div>
			<form class="navbar-search pull-right">
				<input type="text" class="search-query" placeholder="Search">
				<input type="submit" class="btn" value="Search">
			</form>
		</div>
	</div>
</div>

<!-- Main Page -->
<div class="container-fluid" id="main">
	<div class="row-fluid">

		<!-- Notebook list -->
		<div id="notebooks">
			<ul id="cats" class="nav nav-list">
				<li class="nav-header">分类列表</li>
			</ul>
			<br>
			<ul id="tags" class="nav nav-list">
				<li class="nav-header">标签列表</li>
				<li class="tag"><a href="#"><i class="icon-tag"></i>PHP</a></li>
				<li class="tag"><a href="#"><i class="icon-tag"></i>CSS</a></li>
				<li class="tag"><a href="#"><i class="icon-tag"></i>HTML</a></li>
				<li class="tag"><a href="#"><i class="icon-tag"></i>Javascript</a></li>
			</ul>
		</div>

		<!-- Note list -->
		<div id="snippets">
			<ul class="unstyled snippet-view">
				<li class="note">
					<h4 class="title">常用软件的激活方法及注册码</h4>
					<div class="content">
						<span class="pubdate">2012-12-30</span>
						<span class="snippet">sdfsdfadfasfsdf常用软件的激活方法及注册码常用软件的激活方法及注册码常用软件的激活方法及注册码</span>
					</div>
				</li>
			</ul>
		</div>

		<!-- Note Content -->
		<div id="detail">
		</div>
	</div>
</div>

<!-- Dialogs -->
<div id="dialogs">
	<div id="new_notebook" class="dialog"></div>
	<div id="new_note" class="dialog"></div>
</div>

<!-- Handlebar templates -->
<script id="notebook-template" type="text/x-handlebars-template">
	<li class="notebook"><a href="javascript:void(0)"><i class="icon-book"></i>{{name}}({{note_count}})</a></li>
</script>

<script id="tag-template" type="text/x-handlebars-template">
	<li class="tag"><a href="javascript:void(0)"><i class="icon-book"></i>{{name}}({{note_count}})</a></li>
</script>

<script id="snippet-template" type="text/x-handlebars-template">
	<li class="note">
		<h4 class="title">{{title}}</h4>
		<div class="content">
			<span class="pubdate">{{pubdate}}</span>
			<span class="snippet">{{snippet}}</span>
		</div>
	</li>
</script>

<script id="detail-template" type="text/x-handlebars-template">
</script>

</body>
</html>