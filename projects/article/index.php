<?php
require "functions.php";
require 'config.php';
require 'number.php';

//读出所有的文件
$links = read_data();

//th标题
$link_index = array(
	'number' => '编号',
	'time' => '时间',
	'title' => '标题',
	'link' => '链接地址',
	'index' => '难度指数',
	'classification' => '所属分类'
);

/*如果多维数组的中最后一个元素存在,那么它的样式显示高亮
$first_link = $links[0];
class="<?php echo $first_link == $first_link ? 'success' : ''; ?>"*/
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
					<h3>已添加链接<p class="pull-right"><a href="add.php" class="btn btn-primary">添加</a></p></h3>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<p>截止目前已经添加了<?php echo link_line()+1; ?>条链接</p>
		<?php if (!empty($links)): ?>
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<?php foreach($link_index as $key=>$value): ?>
							<th><?php echo $value; ?></th>
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($links as $link): ?>
					<tr>
						<td><?php foo(); ?></td>
						<?php foreach ($link as $key=>$value): ?>
							<td><?php echo $value; ?></td>
						<?php endforeach; ?>
						<td><a class="btn btn-small" href="#">编辑</a></td>
						<td><a class="btn btn-small btn-primary" href="delete.php">删除</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
			<p class="alert alert-info">
				尚没有添加链接!
			</p>
		<?php endif; ?>
	</div>

</body>
</html>
