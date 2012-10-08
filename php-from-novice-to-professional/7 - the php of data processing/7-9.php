<?php
//php数据类型--进制转换

//base_convert()
$bin = "11001";
$hex = "12F";
$oct = "77";
echo "二进制".$bin."对应的十六进制数为：";
echo base_convert($bin,2,16);
echo "<p>";
echo "八进制".$oct."对应的二进制数为：";
echo base_convert($bin,8,2);
echo "<p>";
echo "十六进制".$hex."对应的八进制数为：";
echo base_convert($bin,16,8);
echo "<p>";