<?php
	//添加链接的页面

	require 'functions.php';
	$collection = new LinkCollection(LINK_DATA_FILE);
	$category_collection = new CategoryCollection(CATEGORY_DATA_FILE);


	// 如果已经提交表单, 保存1条数据, 然后跳转到列表页
	if (!empty($_POST) && !empty($_POST['url'])) {
		$link = new Link($_POST);
		$collection->add($link);
		header('Location: index.php');
		exit();
	}

	//分类数据会根据添加分类变化
	$categories = $category_collection->map();

?>

<?php require 'header.php'; ?>

<div class="container">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-verticle">
		<fieldset>
			<legend>添加链接</legend>
			<div class="control-group">
				<label class="control-label" for="time">添加时间</label>
				<div class="controls">
					<input type="text" name="time" id="time" value="<?php echo $today; ?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="title">标题</label>
				<div class="controls">
					<input type="text" id="title" name="title" placeholder="请填写文章的名称" required/>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="url">链接地址</label>
				<div class="controls">
					<input type="text" id="url" name="url" placeholder="如:http://www.baidu.com" required/>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="difficulty">难度指数</label>
				<div class="controls">
					<select name="difficulty" id="difficulty">
						<?php foreach($difficulty as $key=>$value): ?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="category_id">文章所属分类</label>
				<div class="controls">
					<select name="category_id" id="category_id">
						<?php foreach($categories as $key=>$value): ?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						<?php endforeach; ?>
					</select>
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
