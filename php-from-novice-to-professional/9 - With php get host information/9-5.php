<?php
//getdate()获取时间及日期信息
date_default_timezone_set('PRC');
$today = getdate();

echo '<pre>';
print_r($today);
echo '</pre>';

echo '当前的年份: '.$today['year'].'<p>';
echo '当前的月份: '.$today['mon'].'<p>';
echo '当前的天份: '.$today['mday'].'<p>';
echo '当前的月份: '.$today['month'].'<p>';
echo '今天是星期: '.$today['weekday'].'<p>';
echo '今天是今年的第: '.$today['yday'].'天<p>';
echo '今天是星期: '.$today['wday'].'<p>';
echo '现在的小时数: '.$today['hours'].'<p>';
echo '当前的分数: '.$today['minutes'].'<p>';
echo '当前的秒数: '.$today['seconds'].'<p>';
echo '从纪元开始到现在的秒数: '.$today['0'].'<p>';
echo '当前的时间'.$today['year'].'年'.$today['mon'].'月'.$today['mday'].'日'.$today['hours'].'时'.$today['minutes'].'分'.$today['seconds'].'秒';
