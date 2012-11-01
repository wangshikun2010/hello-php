<?php
require 'color.php';

//画一条直线
imageline($im,30,10,350,10,$white);

//画一个没有填充的矩形
imagerectangle($im,50,50,100,100,$blue);

//画一个填充了的矩形
imagefilledrectangle($im,110,110,160,160,$yellow);

//画一个没有填充的圆
imageellipse($im,200,200,30,40,$zi);

//画一个填充了的圆
imagefilledellipse($im,300,300,100,100,$red);

imagepng($im);
imagedestroy($im);