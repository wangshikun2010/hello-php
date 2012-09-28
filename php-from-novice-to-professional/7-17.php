<?php
//php中的数据函数--字符串函数--转化字符串中的特殊符号位HTML标记

$s = "<font color=\"#FF0000\">I love beijing toktianan!</font>";
$t = htmlspecialchars($s);
$s1 = "<font size=\"16px\">tiananmen square ,the son rose!</font>";
$t1 = htmlspecialchars($s1);
echo $s."<p>";
echo $t."<p>";
echo $s1."<p>";
echo $t1."<p>";
