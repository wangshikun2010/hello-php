<?php
require 'char.php';
//创建图像
$image = imagecreate(100,40);

//颜色
$background = imagecolorallocate($image, 223, 223, 223);
$lineColor = imagecolorallocate($image, rand(100,255), rand(100,255), rand(100,255));
$pointColor = imagecolorallocate($image, rand(150,200), rand(150,200), rand(150,200));
$textColor = imagecolorallocate($image, rand(0,130), rand(0,130), rand(0,130));

//划线
for ($i=0; $i < 4; $i++) {
	imageline($image, rand(0,50), rand(0,40), rand(50,100), rand(0,40), $lineColor);
}

//划点
for ($i=0; $i < 200; $i++) {
	imagesetpixel($image, rand()%100, rand()%40, $pointColor);
}

//将随机数写入图片
imagestring($image, rand(3,6), rand(5,20), rand(0,20), $text[0], $textColor);
imagestring($image, rand(3,6), rand(25,45), rand(0,20), $text[1], $textColor);
imagestring($image, rand(3,6), rand(50,75), rand(0,20), $text[2], $textColor);
imagestring($image, rand(3,6), rand(80,100), rand(0,20), $text[3], $textColor);

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

