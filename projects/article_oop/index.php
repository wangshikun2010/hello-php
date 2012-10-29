<?php
//显示链接

require "functions.php";
$collection = new LinkCollection(LINK_DATA_FILE);
$category_collection = new CategoryCollection(CATEGORY_DATA_FILE);

//读出所有的文件
$links = $collection->read();
$categories = $category_collection->map();

//判断有没有传category_id这个参数
if (isset($_GET['category_id'])) {
	$category_id = intval($_GET['category_id']);
	$category_links = array();
	//遍历数组找到与category_id相同的,看要找的数组是否存在,找到了放在新的数组,并覆盖当前数组
	foreach ($links as $key => $link) {
		if ($link->category_id == $category_id) {
			$category_links[] = $link;
		}
	}
	$links = $category_links;
}
//debug($links);

?>

<?php require 'header.php'; ?>

<div class="container">
	<?php if (!empty($links)): ?>
		<p class="text-error"><b>已添加链接</b></p>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>分类</th>
					<th>标题</th>
					<th>难度</th>
					<th>时间</th>
					<th>管理</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($links as $link): ?>
				<tr>
					<!--取到相对应的link键对值的键对值-->

					<!--进行分类-->
					<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?category_id=<?php echo $link->category_id; ?>"><?php echo $categories[$link->category_id]; ?></a></td>
					<td><a href="<?php echo $link->url; ?>" title="<?php echo $link->title; ?>" target="_blank"><?php echo $link->title; ?></a></td>
					<td><?php echo $difficulty[$link->difficulty]; ?></td>
					<td><?php echo $link->time; ?></td>
					<td>
						<a class="btn btn-small" href="edit_link.php?id=<?php echo $link->id?>" title="点击编辑链接">编辑</a>
						<a class="btn btn-small btn-primary" href="delete_link.php?id=<?php echo $link->id ?>" title="点击删除链接" onclick="window.confirm('你确定要删除吗?');">删除</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>x
	<?php else: ?>
		<p class="alert alert-info">
			尚没有添加链接!
		</p>
	<?php endif; ?>

	<?php debug($links); ?>
</div>

<?php require 'footer.php'; ?>
