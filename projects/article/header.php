<?php
	require 'config.php';
?>

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
				<p class="pull-right"><a href="add.php" class="btn btn-primary">添加</a></p>
			</div>
		</div>
	</div>
</div>
