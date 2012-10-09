<?php
	$application_name = "学生信息登记册";
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
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="container">
	<form action="submit.php" method="post" class="form-verticle">

		<!-- tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#basic-info" data-toggle="tab">基本信息</a></li>
			<li><a href="#profession-info" data-toggle="tab">专业信息</a></li>
			<li><a href="#extension-info" data-toggle="tab">扩展信息</a></li>
			<li><a href="#contact-info" data-toggle="tab">联系信息</a></li>
		</ul>

		<!-- panels -->
		<div class="tab-content">
			<fieldset class="tab-pane active" id="basic-info">
				<div class="control-group">
					<label class="control-label" for="name">姓名</label>
					<div class="controls">
						<input type="text" id="name" name="name" placeholder="如:张三" class="border" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="student_id">学号</label>
					<div class="controls">
						<input type="text" pattern="[0-9]{10}" id="student_id" name="student_id" placeholder="如:2120101000" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="age">年龄</label>
					<div class="controls">
						<select name="age" id="age">
						<?php for ($i=15; $i<50; $i++): ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="gender">姓别</label>
					<div class="controls">
						<select name="gender" id="gender">
							<option value="1">男</option>
							<option value="0">女</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="height">身高</label>
					<div class="controls">
						<select name="height" id="height">
							<?php for ($i=150; $i<200; $i++): ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>厘米</option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

			</fieldset>

			<fieldset class="tab-pane" id="profession-info">
				<div class="control-group">
					<label class="control-label" for="school">学校</label>
					<div class="controls">
						<select name="school" id="school">
							<option value="school">北京理工大学</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="college">学院</label>
					<div class="controls">
						<select name="college" id="college">
							<option value="college">经济与管理学院</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="specialty">专业</label>
					<div class="controls">
						<select name="specialty" id="specialty">
							<option value="specialty">信息与计算科学</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="grade">年级</label>
					<div class="controls">
						<select name="grade" id="grade">
							<?php for ($i=2008; $i<2020; $i++): ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>级</option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="class">班级</label>
					<div class="controls">
						<select name="class" id="class">
							<?php for ($i=1; $i<5; $i++): ?>
								<option value="<?php echo $i; ?>">信息<?php echo $i; ?>班</option>
							<?php endfor; ?>
						</select>
					</div>
				</div>
			</fieldset>

			<fieldset class="tab-pane" id="extension-info">
				<div class="control-group">
					<label class="control-label" for="hometown">籍贯</label>
					<div class="controls">
						<input type="text" id="hometown" name="hometown" placeholder="如:陕西" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="id_number">身份证号</label>
					<div class="controls">
						<input type="text" pattern="[0-9]{18}" id="id_number" name="id_number" placeholder="如:612429165410113548" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="Political_landscape">政治面貌</label>
					<div class="controls">
						<select name="Political_landscape" id="Political_landscape">
							<option value="1">中共党员</option>
							<option value="2">中共预备党员</option>
							<option value="3">共青团员</option>
							<option value="4">普通公民</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="hobby">个人爱好</label>
					<div class="controls">
						<textarea name="hobby" id="hobby" cols="25" rows="5"></textarea>
					</div>
				</div>

			</fieldset>

			<fieldset class="tab-pane" id="contact-info">
				<div class="control-group">
					<label class="control-label" for="phone">电话</label>
					<div class="controls">
						<input type="text" pattern="1[358][0-9]{9}" id="phone" name="phone" placeholder="如: 13624512694" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="mailbox">电子邮箱</label>
					<div class="controls">
						<input type="email" id="mailbox" name="mailbox" placeholder="如: wangshikun@gmail.com" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="address">地址</label>
					<div class="controls">
						<input type="text" id="address" name="address" placeholder="Address" required/>
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

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>