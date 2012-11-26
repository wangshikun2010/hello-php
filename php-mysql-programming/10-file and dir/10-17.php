<?php
if (!is_dir('explame')) {
	if (mkdir('explame')) {
		echo '创建目录成功<p>';
	}
}

if (rmdir('explame')) {
	echo '删除目录成功';
}