<?php
//php中的数据处理---生成随机数

//rand(int min,int max)
echo "生成一位随机数：";
echo rand(1,10);
echo "<p>";
echo "生成一位无参随机数：";
echo rand();
echo "<p>";
echo "生成一位无参随机数：";
echo rand();
echo "<p>";
echo "生成四位随机数：";
echo rand(1000,9999);
echo "<p>";
echo "生成负随机数：";
echo rand(-5,-9999.5);
echo "<p>";

