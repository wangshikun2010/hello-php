<?php
//php中数据函数--字符串函数--去除字符串中的特殊符号

$s = "<font color=\"#FF0000\">I love beijing toktianan!</font>";
$t = strip_tags($s);
$s1 = "<font size=\"16px\">tiananmen square ,the son rose!</font>";
$t1 = strip_tags($s1);
echo $s."<p>";
echo $t."<p>";
echo $s1."<p>";
echo $t1."<p>";
