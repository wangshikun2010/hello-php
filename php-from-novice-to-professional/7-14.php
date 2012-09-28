<?php
//php数据处理--字符串函数--截取字符串函数substr()

//substr()
$s = "abcdefghijkl";
$s2 = "I love this game!";
echo "字符串".$s;
echo "<br/>";
echo "从3开始的5个字符串是：";
echo substr($s,3,5);
echo "<p>";
echo "字符串".$s2;
echo "<br/>";
echo "从2开始的0个字符串是：";
echo substr($s2,2);
echo "<p>";
echo "字符串".$s2;
echo "<br/>";
echo "从-5开始的字符串是：";
echo substr($s2,-6);
echo "<p>";
echo "字符串".$s2;
echo "<br/>";
echo "从2开始的-6个字符串是：";
echo substr($s2,2,-6);
echo "<p>";