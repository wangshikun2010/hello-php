<?php
//php中的数据处理--数组函数--移动数组的指针

$new = array("zero","one","two","three","four","five","six");
print_r($new);
echo "<p>";

//current()
echo "指针当前指向：";
echo current($new);
echo "<p>";

//next()
echo "指针向后移一位：";
echo next($new);
echo "<p>";

//end()
echo "指针移向尾部：";
echo end($new);
echo "<p>";

//prev()
echo "指针向前移一位：";
echo prev($new);
echo "<p>";

//reset()
echo "重置指针的位置：";
echo reset($new);
echo "<p>";

$number = array(0,1,2,3,4,5,6);
print_r($number);
echo "<p>";

//current()
echo "指针当前指向：";
echo current($number);
echo "<p>";

//next()
echo "指针向后移一位：";
echo next($number);
echo "<p>";

//end()
echo "指针移向尾部：";
echo end($number);
echo "<p>";

//prev()
echo "指针向前移一位：";
echo prev($number);
echo "<p>";

//reset()
echo "重置指针的位置：";
echo reset($number);
echo current($number);
echo pos($number);