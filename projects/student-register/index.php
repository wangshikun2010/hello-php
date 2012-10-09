<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>学生信息表</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="./css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="main">
	<h1><?php echo "Hello, Welcome to Beijing!"; ?></h1>
	<form action="" method="post">
		<fieldset>
			<legend>基本信息</legend>
				<label for="name">姓名</label><br/>
				<input type="text" id="name" name="name" placeholder="Name" class="border"/><br/>

				<label for="student_id">学号</label><br/>
				<input type="text" id="student_id" name="student_id" placeholder="Student ID"/><br/>

				<label for="age">年龄</label>
				<select name="age" id="age">
					<?php for ($i=15; $i<50; $i++): ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php endfor; ?>
				</select><br/>

				<label for="gander">姓别</label>
				<select name="gander" id="gander">
					<option value="man">男</option>
					<option value="women">女</option>
				</select>
		</fieldset>
		<fieldset>
			<legend>专业信息</legend>
				<label for="school">学校</label>
				<select name="school" id="school">
					<option value="school">北京理工大学</option>
				</select><br/>

				<label for="college">学院</label>
				<select name="college" id="college">
					<option value="college">经济与管理学院</option>
				</select><br/>

				<label for="Specialty">专业</label>
				<select name="Specialty" id="Specialty">
					<option value="Specialty">信息与计算科学</option>
				</select><br/>

				<label for="grade">年级</label>
				<select name="grade" id="grade">
					<?php
						for ($i=2008; $i<2020; $i++) {
							echo "<option value=\"grade$i\">";
							echo $i."级";
							echo "</option>";
						}
					?>
				</select><br/>

				<label for="class">班级</label>
				<select name="class" id="class">
					<?php
						for ($i=1; $i<5; $i++) {
							echo "<option value=\"class$i\">";
							echo "信息".$i."班";
							echo "</option>";
						}
					?>
				</select>
		</fieldset>
		<fieldset>
			<legend>扩展信息</legend>
				<label for="hometown">籍贯</label><br/>
				<input type="text" id="hometown" name="hometown" placeholder="Hometown"/><br/>


				<label for="id_number">身份证号</label><br/>
				<input type="text" id="id_number" name="id_number" placeholder="ID number"/><br/>

				<label for="Political_landscape">政治面貌</label>
				<select name="Political_landscape" id="Political_landscape">
					<option value="">中共党员</option>
					<option value="">中共预备党员</option>
					<option value="">共青团员</option>
					<option value="">普通公民</option>
				</select><br/>

				<label for="hobby">个人爱好</label><br/>
				<textarea name="hobby" id="hobby" cols="25" rows="5"></textarea><br/>

				<label for="height">身高</label>
				<select name="height" id="height">
					<?php
						for ($i=150; $i<200; $i++) {
							echo "<option value=\"height$i\">";
							echo $i."cm";
							echo "</option>";
						}
					?>
				</select>
		</fieldset>
		<fieldset>
			<legend>联系信息</legend>
				<label for="phone">电话</label><br/>
				<input type="text" id="phone" name="phone" placeholder="Phone"/><br/>


				<label for="mailbox">电子邮箱</label><br/>
				<input type="text" id="mailbox" name="mailbox" placeholder="Mailbox"/><br/>

				<label for="address">地址</label><br/>
				<input type="text" id="address" name="address" placeholder="Address"/>
		</fieldset>
		<input type="submit" value="提交"/>
		<input type="reset" value="重新填写"/>
	</form>
</div>
</body>
</html>