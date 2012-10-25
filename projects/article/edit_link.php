<?php
	//编辑链接

	require 'functions.php';

	// 如果已经提交表单, 保存1条数据, 然后跳转到列表页
	if (!empty($_POST) && !empty($_POST['url'])) {
		write_link($_POST);
		header('Location: index.php');
	} else {
		//读取提交信息的id
		$link = read_link($_GET['id']);
		$categories = read_category_map();
	}

?>

<?php require 'header.php'; ?>

<div class="container">
	<p class="text-error"><b>编辑链接</b></p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-verticle">
		<div class="tab-content">
			<fieldset>
				<input type="hidden" id="id" name="id" value="<?php echo $link['id']; ?>">
				<div class="control-group">
					<label class="control-label" for="time">添加时间</label>
					<div class="controls">
						<input type="text" name="time" id="time" value="<?php echo $link['time']; ?>">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="title">标题</label>
					<div class="controls">
						<input class="span6" type="text" id="title" name="title" value="<?php echo $link['title']; ?>" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="url">链接地址</label>
					<div class="controls">
						<input class="span6" type="text" id="url" name="url" value="<?php echo $link['url']; ?>" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="difficulty">难度指数</label>
					<div class="controls">
						<select name="difficulty" id="difficulty">
							<?php foreach($difficulty as $key=>$value): ?>
								<?php if ($key == $link['difficulty']): ?>
									<option selected value="<?php echo $key; ?>"><?php echo $value; ?></option>
								<?php else: ?>
									<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
								<?php endif; ?>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="category_id">文章所属分类</label>
					<div class="controls">
						<select name="category_id" id="category_id">
							<?php foreach($categories as $key=>$value): ?>
								<?php if ($key == $link['category_id']): ?>
									<option selected value="<?php echo $key; ?>"><?php echo $value; ?></option>
								<?php else: ?>
									<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
								<?php endif; ?>
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

	<?php debug($link); ?>
</div>

<?php require 'footer.php'; ?>
