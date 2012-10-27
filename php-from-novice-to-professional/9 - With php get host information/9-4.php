<?php
	//date()格式化输出当前的日期
	date_default_timezone_set('PRC');
	echo '今天的日期: '.date('Y年n月d日');
	echo '<p>';
	echo '今天是星期: '.date('w');
	echo '<p>';
	echo '现在的时间是: '.date('aG点i分s秒');
	echo '<p>';
	echo date('Y年n月d日G点i分s秒',mktime(1,2,3,4,5,6));
?>