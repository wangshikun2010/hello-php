<?php
//php中的数据函数--字符串函数--格式化输出字符串sprintf()

$float1 = 68.75;
$float2 = 54.35;
$float  = $float1 + $float2;
$format = sprintf("%01.3f",$float);
echo $format."<br/>";

$s = "123.31";
echo $s."的原始值：".$s;
echo "<p>";
$temp = sprintf("%-1.1f",$s);
echo $s."格式化后的值：".$temp;
echo "<p>";
$s = "12 3 5";
echo $s."的原始值：".$s;
echo "<p>";
$temp = sprintf("%0-b",$s);
echo $s."格式化后的值：".$temp;