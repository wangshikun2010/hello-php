<?php
	require 'config.php';
	require 'functions.php';
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
						<li><a href="display.php">链接页面</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<form action="submit.php" method="post" class="form-verticle">
		<div class="tab-content">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="time">添加时间</label>
					<div class="controls">
						<!--<input type="text" id="time" name="time" placeholder="如:2012-10-17" class="border" required/>-->
						<select name="time" id="time">
							<option value="<?php echo $today; ?>"><?php echo $today; ?></option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="title">标题</label>
					<div class="controls">
						<input type="text" id="title" name="title" placeholder="请填写文章的名称" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="link">链接地址</label>
					<div class="controls">
						<input type="text" id="link" name="link" placeholder="如:http://www.baidu.com" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="index">难度指数</label>
					<div class="controls">
						<select name="index" id="index">
							<?php foreach($index as $key=>$value): ?>
								<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="classification">文章所属分类</label>
					<div class="controls">
						<select name="classification" id="classification">
							<?php foreach($classification as $key=>$value): ?>
								<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="form-actions">
			<input type="submit" class="btn btn-primary btn-large" value="提交"/>
			<input type="reset" class="btn btn-danger btn-large" value="重新填写"/>
		</div>
	</form>
</div>

<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
