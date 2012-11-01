<?php
require 'color.php';

$font = 'wingdings.ttf';
$x1 = 20;
$y1 = 20;
$x2 = 100;
$y2 = 200;
//创建一个矩形
imagefilledrectangle($im,$x1,$y1,$x2,$y2,$blue);
// imagettftext($im,20,0,10,10,$zi,$font,'wang shi kun');

//在图像上写入文字
imagestring($im,5,35,15,'hello world',$red);
imagestring($im,5,200,200,date('y-m-d'),$blue);

imagepng($im);
imagedestroy($im);


