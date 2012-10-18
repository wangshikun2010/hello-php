<?php
require "functions.php";
require 'config.php';
$links = read_data();

$link_index = array(
	'time' => '时间',
	'title' => '标题',
	'link' => '链接地址',
	'index' => '难度指数',
	'classification' => '所属分类'
);
$link_count = count($links);
//如果多为数组的中最后一个元素存在,那么它的样式显示高亮
if ($links[$link_count-1]) {
	$latest_link = $links[$link_count-1];
}

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
		<?php if (!empty($links)): ?>
			<table class="table table-bordered table-stripped">
				<tr>
					<?php foreach($link_index as $key=>$value): ?>
						<th><?php echo $value; ?></th>
					<?php endforeach; ?>
				</tr>
				<?php foreach ($links as $link): ?>
				<tr class="<?php $latest_link == $latest_link ? 'success' : ''; ?>">
					<?php foreach ($link as $key=>$value): ?>
						<td><?php echo $value; ?></td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
			</table>
		<?php else: ?>
			<p class="alert alert-info">
				尚没有添加链接!
			</p>
		<?php endif; ?>
	</div>

</body>
</html>
