<?php
//php数据库函数--字符串函数--两个字符串的比较
$s = "abcdefg";
$s2 = "abddefg";
$s3 = "abddefg";
echo $s;
echo "<p>";
echo $s2;
echo "<p>";
echo $s3;
echo "<p>";

function bijiao($str1,$str2) {
	if(strcmp($str1,$str2)>0) {
		echo $str1."大于".$str2;
	} else if(strcmp($str1,$str2)<0) {
		echo $str1."小于".$str2;
	} else{
		echo $str1."==".$str2;
	}
}

bijiao($s,$s2);
echo "<p>";
bijiao($s,$s3);
echo "<p>";
bijiao($s2,$s3);
echo "<p>";

echo strcmp($s,$s2)."<p>";
echo strcmp($s,$s3)."<p>";
echo strcmp($s2,$s3)."<p>";
