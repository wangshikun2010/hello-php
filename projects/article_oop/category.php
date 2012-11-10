<?php
//显示分类

require "functions.php";

$collection = new CategoryCollection(CATEGORY_DATA_FILE);

//读出所有的文件
$categories = $collection->read();
//debug($categories);
?>

<?php require 'header.php'; ?>

<div class="container">
	<?php if (!empty($categories)): ?>
		<p class="text-error"><b>已添加分类</b></p>
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
					<td><a href="index.php?category_id=<?php echo $category->id; ?>"><?php echo $category->name; ?></a></td>
					<td><?php echo $category->time; ?></td>
					<td>
						<a class="btn btn-small" href="edit_category.php?id=<?php echo $category->id?>" title="点击编辑分类">编辑</a>
						<a class="btn btn-small btn-primary" href="delete_category.php?id=<?php echo $category->id?>" title="点击删除分类" onclick="window.confirm('你确定要删除吗?');">删除</a>
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

	<?//php debug($categories); ?>
</div>

<?php require 'footer.php'; ?>
