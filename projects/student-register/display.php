<?php

require "functions.php";
require "config.php";

$students = read_data();
$current_student_id = isset($_GET['student_id']) ? $_GET['student_id'] : 0;

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
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/reset.css" rel="stylesheet">
</head>
<body class="container">

<h1>已登记学生信息 <p class="pull-right"><a href="index.php" class="btn btn-primary">登记</a></p></h1>

<?php if (!empty($students)): ?>
	<table class="table table-bordered table-stripped">
		<tr>
			<?php foreach($keys as $key=>$value): ?>
				<th width="<?php echo $width[$key]; ?>"><?php echo $value; ?></th>
			<?php endforeach; ?>
		</tr>
		<?php foreach ($students as $student): ?>
		<tr class="<?php echo $student['student_id'] == $current_student_id ? 'success' : ''; ?>">
			<?php foreach ($student as $key=>$value): ?>
				<?php if (isset(${$key})): ?>
					<td><?php echo ${$key}[$value]; ?></td>
				<?php else: ?>
					<td><?php echo $value; ?></td>
				<?php endif; ?>
			<?php endforeach; ?>
		</tr>
		<?php endforeach; ?>
	</table>
<?php else: ?>
	<p class="alert alert-info">
		尚没有任何学生登记!
	</p>
<?php endif; ?>

</body>
</html>