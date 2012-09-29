<?php
//php数据处理--数组函数--数组排序

$temp = array(1,5,788,-415,25);
echo "原数组：";
print_r($temp);
echo "<br/>";
echo "数组temp经过sort函数排序后：";
sort($temp);
print_r($temp);
echo "<br/>";
echo "数组temp经过rsort函数排序后：";
rsort($temp);
print_r($temp);
echo "<p>";

$temp1 = array("beijing","nanjing","shanghai","hangzhou","chongqing");
echo "原数组：";
print_r($temp1);
echo "<br/>";
echo "数组temp1经过sort函数排序后：";
sort($temp1);
print_r($temp1);
echo "<br/>";
echo "数组temp1经过rsort函数排序后：";
rsort($temp1);
print_r($temp1);
echo "<p>";
