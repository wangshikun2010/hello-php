<?php
//php中的数据处理--数学函数，计算直角三角形斜边的长度

//hypot()
$a = 3;
$b = 4;
echo "三角形一边的长度：".$a."<br/>";
echo "三角形另一边的长度：".$b."<br/>";
echo "三角形斜边的长度：";
echo hypot($a,$b);
echo "<p>";
$a = 5;
$b = 12;
echo "三角形一边的长度：".$a."<br/>";
echo "三角形另一边的长度：".$b."<br/>";
echo "三角形斜边的长度：";
echo hypot($a,$b);