<?php
header('Content-type: image/png');
$im = imagecreate(500,200);
$bakcground = imagecolorallocate($im,255,78,54);
$text_color = imagecolorallocate($im,54,78,2);
imagestring($im,5,50,50,'create a image',$text_color);
imagepng($im);
imagedestroy($im);