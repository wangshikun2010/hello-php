<?php
require "functions.php";
require 'config.php';

//读出所有的文件
$links = read_data();

//th标题
$link_index = array(
	'time' => '时间',
	'title' => '标题',
	'link' => '链接地址',
	'index' => '难度指数',
	'classification' => '所属分类',
	'id' => '编号',
	'file' => '文件操作'
);

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

<?php
	 require 'header.php';
?>

<div class="container">
	<!--<p>截止目前已经添加了条链接</p>-->
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
					<?php foreach ($link as $key=>$value): ?>
						<td><?php echo $value; ?></td>
					<?php endforeach; ?>
					<td><a class="btn btn-small" href="#">编辑</a></td>
					<td><a class="btn btn-small btn-primary" href="delete.php?id=<?php echo $link['id']?>">删除</a></td>
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
