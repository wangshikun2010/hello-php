<?php
require 'char.php';
//创建图像
$image = imagecreate(100,40);

//颜色
$background = imagecolorallocate($image, 223, 223, 223);
$lineColor = imagecolorallocate($image, rand(20,255), rand(20,255), rand(20,255));
$textColor = imagecolorallocate($image, rand(100,255), rand(100,255), rand(100,255));

//划线
for ($i=0; $i < 4; $i++) {
	imageline($image, rand(0,100), rand(0,100), rand(0,100), rand(0,100), $lineColor);
}

//划点
for ($i=0; $i < 200; $i++) {
	imagesetpixel($image, rand()%100, rand()%100, $lineColor);
}

//将随机数写入图片
imagestring($image, rand(3,6), rand(5,25), rand(0,20), $text[0], $textColor);
imagestring($image, rand(3,6), rand(25,45), rand(0,20), $text[1], $textColor);
imagestring($image, rand(3,6), rand(45,65), rand(0,20), $text[2], $textColor);
imagestring($image, rand(3,6), rand(65,85), rand(0,20), $text[3], $textColor);


header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

