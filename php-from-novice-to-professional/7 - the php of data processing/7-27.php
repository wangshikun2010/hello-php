<?php
//php中的数据处理--数组函数--计算数组中所有元素出现的次数

require_once "functions.php";

//array_count_values
$new = array(1,5,4,5,7,5,6,2,7,3,5,1,1,9);
debug($new);
echo "<p>";
debug(array_count_values($new));

$new = array(1,5,4,5,7,5,6,2,7,3,5, "", null, false, false, null, "");
echo "<p>";
debug(array_count_values($new));
echo "<p>";
debug(array_unique($new));

