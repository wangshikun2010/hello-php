<?php
/*
获取文件的大小
*/
$filename = "data.php";
echo $filename.": ".filesize($filename)."Bytes";
echo "<br/>";
echo filetype($filename);
echo "<br/>";
echo '文件上次的修改时间: '.date("F d Y H:i:s", filemtime($filename));
echo "<br/>";
echo '文件的访问时间: '.date("F d Y H:i:s", fileatime($filename));
echo "<br/>";
echo '文件的权限: '.fileperms($filename);