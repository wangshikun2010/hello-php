<?php

require "functions.php";

// debug($_POST);

$students = write_data($_POST);

$keys = array(
	'name' => '姓名',
	'student_id' => '学号',
	'age' => '年龄',
	'gender' => '性别',
	'height' => '身高',
	'school' => '学校',
	'college' => '学院',
	'specialty' => '特长',
	'grade' => '年级',
	'class' => '班级',
	'hometown' => '籍贯',
	'id_number' => '身份证号',
	'political_landscape' => '政治面貌',
	'hobby' => '爱好',
	'phone' => '电话',
	'mailbox' => '邮箱',
	'address' => '地址',
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
<body class="container">

<table class="table table-bordered table-stripped">
	<tr>
		<?php foreach($keys as $key): ?>
			<th><?php echo $key; ?></th>
		<?php endforeach; ?>
	</tr>
	<?php foreach($students as $student): ?>
	<tr>
		<?php foreach($student as $key=>$value): ?>
			<td><?php echo $value; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>