<?php
require "functions.php";

//读出所有的文件
$categories = read_category();

?>

<?php require 'header.php'; ?>

<div class="container">
	<?php if (!empty($categories)): ?>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>分类</th>
					<th>时间</th>
					<th>管理</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categories as $category): ?>
				<tr>
					<td><a href="index.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></td>
					<td><?php echo $category['time']; ?></td>
					<td>
						<a class="btn btn-small" href="edit_category.php?id=<?php echo $category['id']?>">编辑</a>
						<a class="btn btn-small btn-primary" href="delete_category.php?id=<?php echo $category['id']?>">删除</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<p class="alert alert-info">
			尚没有添加分类!
		</p>
	<?php endif; ?>

	<?php debug($categories); ?>
</div>

<?php require 'footer.php'; ?>
