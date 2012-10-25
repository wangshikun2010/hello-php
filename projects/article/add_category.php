<?php
	//添加分类的页面

	require 'functions.php';

	// 如果一个分类存在,就写入分类,显示在显示分类页面
	if (!empty($_POST) && !empty($_POST['name'])) {
		//debug($_POST);
		write_category($_POST);
		header('Location: category.php');
		exit();
	}

?>

<?php require 'header.php'; ?>

<div class="container">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-verticle">
		<fieldset>
			<legend>添加分类</legend>
			<div class="control-group">
				<label class="control-label" for="time">时间</label>
				<div class="controls">
					<input type="text" name="time" id="time" value="<?php echo $today; ?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="name">标题</label>
				<div class="controls">
					<input type="text" id="name" name="name" placeholder="请填写文章的名称" required/>
				</div>
			</div>
		</fieldset>
		<div class="form-actions">
			<input type="submit" class="btn btn-primary btn-large" value="提交"/>
			<input type="reset" class="btn btn-danger btn-large" value="重新填写"/>
		</div>
	</form>
</div>

<?php require 'footer.php'; ?>
