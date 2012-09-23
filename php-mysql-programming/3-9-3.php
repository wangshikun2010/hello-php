<?php
//Heredoc
$href = "www.Google.com";
echo <<<p
<p>近日，有关谷歌Android和阿里云的争论闹得沸沸扬扬，谷歌高管、Android开发领头人Andy
Rubin在其<a href="$href">Google</a>+主页中这样写道：阿里云系统采用了谷歌Android系统的运行环境，明显是由
Android系统修改得来。Andy Rubin称，事实是，阿里云系统包含了Android中运行环境，明显是
从Android中演变而来，但无法与Android兼容。基于Google对阿里云网站上应用的分析，这个平
台尝试与Android兼容，但未能成功。</p>
p;
?>