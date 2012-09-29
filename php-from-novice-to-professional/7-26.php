<?php
//php数据处理--数组函数--删除数组中重复的元素

$new = array("zero","one","two","three","four","five","six","zero","nine","three");
print_r($new);
echo "<p>";
print_r(array_unique($new));