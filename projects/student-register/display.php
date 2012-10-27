<?php

require "functions.php";
require "config.php";

$students = read_data();

//如果学生添加,就取出当前学生的学号
$current_student_id = isset($_GET['student_id']) ? $_GET['student_id'] : 0;

?>

<?php require 'header.php'; ?>

<?php if (!empty($students)): ?>
	<div class="container">
		<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<?php foreach($keys as $key=>$value): ?>
						<th width="<?php echo $width[$key]; ?>"><?php echo $value; ?></th>
					<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
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
			</tbody>
		</table>
	<div>
<?php else: ?>
	<p class="alert alert-info">
		尚没有任何学生登记!
	</p>
<?php endif; ?>

<?php require 'footer.php'; ?>
