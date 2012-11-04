<?php
require 'color.php';

$num = array(
	100,
	120,
	125,
	130,
	160,
	200,
	230,
	250,
	290,
	310,
	400,
	200,
);

//画出横坐标和纵坐标
imageline($im,5,5,5,435,$white);
imageline($im,5,435,450,435,$white);

//画出直方图
for ($i=0; $i<count($num); $i++) {
	imagefilledrectangle($im,($i+1)*30,440-$num[$i]-5,($i+1)*30+20,435,$white);
}

//标出直方图的值
for ($i=0; $i < count($num); $i++) {
	imagestring($im,3,($i+1)*30,440-$num[$i]-5,$num[$i],$blue);
}

//标出直方图的序号
for ($i=1; $i < 13; $i++) {
	imagestring($im,3,$i*30,430,$i,$red);
}

//标出直方图的分界值
for ($i=0; $i < 5; $i++) {
	$s = $i*100;
	imagestring($im,4,5,435-$s,$s,$white);
}
imagepng($im);
imagedestroy($im);