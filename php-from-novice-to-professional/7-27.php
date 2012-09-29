<?php
//php中的数据处理--数组函数--计算数组中所有元素出现的次数

//array_count_values
$new = array(1,5,4,5,7,5,6,2,7,3,5,1,1,9);
print_r($new);
echo "<p>";
print_r(array_count_values($new));
