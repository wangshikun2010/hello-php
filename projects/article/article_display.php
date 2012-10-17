<?php

require "article_functions.php";
require "article_config.php";

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
	<link href="../student-register/css/bootstrap.min.css" rel="stylesheet">
	<link href="../student-register/css/reset.css" rel="stylesheet">
</head>
<body class="container">

<h1>已添加链接<p class="pull-right"><a href="article_index.php" class="btn btn-primary">添加</a></p></h1>

<?php if (!empty($links)): ?>
	<table class="table table-bordered table-stripped">
		<tr>
			<?php foreach($link_index as $key=>$value): ?>
				<th><?php echo $value; ?></th>
			<?php endforeach; ?>
		</tr>
		<?php foreach ($links as $link): ?>
		<tr>
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

</body>
</html>
<!--<ul class="nav nav-tabs">
	<li class="active"><a href="#HTML" data-toggle="tab">HTML</a></li>
	<li><a href="#CSS" data-toggle="tab">CSS</a></li>
	<li><a href="#Javascript" data-toggle="tab">Javascript</a></li>
	<li><a href="#PHP" data-toggle="tab">PHP</a></li>
</ul>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>-->