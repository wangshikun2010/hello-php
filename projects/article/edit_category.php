<?php
	//编辑分类

	require 'functions.php';

	if (!empty($_POST) && !empty($_POST['name'])) {
		write_link($_POST);
		header('Location: category.php');
	} else {
		//读取提交信息的id
		$category = read_category($_GET['id']);
		$categories = read_category_map();
	}

	debug($category);
	debug($categories);

?>

<?php require 'header.php'; ?>

<div class="container">
	<p class="text-error"><b>编辑分类</b></p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-verticle">
		<div class="tab-content">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="time">时间</label>
					<div class="controls">
						<input type="text" name="time" id="time" value="<?php echo $category['time']; ?>">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="name">标题</label>
					<div class="controls">
						<input type="text" id="name" name="name" placeholder="请填写文章的名称" value="<?php echo $category['name']; ?>" required/>
					</div>
				</div>

			</fieldset>
		</div>
		<div class="form-actions">
			<input type="submit" class="btn btn-primary btn-large" value="提交"/>
			<input type="reset" class="btn btn-danger btn-large" value="重新填写"/>
		</div>
	</form>

	<?php debug($category); ?>
</div>

<?php require 'footer.php'; ?>
