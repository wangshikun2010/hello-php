<?php
//在图片上写入文字
require 'color.php';

$img = imagecreatefrompng('./img/glyphicons-halflings-white.png');

imagestring($img,5,20,10,'This is image',$blue);

imagestring($img,5,100,50,'TU BIAO',$red);

imagepng($img);
imagedestroy($img);
