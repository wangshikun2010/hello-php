<?php
//php中数据处理--数学函数--pi()

//pi()
echo "圆周率的值为：";
echo pi();
echo "<p>";
$r = 10;
echo "圆的半径".$r.",则周长为:";
echo number_format(2*pi()*$r,2)."cm,";
echo "圆的面积：";
echo number_format(pi()*$r*$r,2)."平方cm";
