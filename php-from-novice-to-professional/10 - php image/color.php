<?php
//输出一个png图片文件
header('Content-type: image/png');

//创建图像的宽度和高度
$im = imagecreate(500,500);

//定义各种颜色,第一个定义默认就是背景颜色
$background = imagecolorallocate($im, 223, 223, 223);
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
$yellow = imagecolorallocate($im, 255, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$zi = imagecolorallocate($im, 255, 0, 255);