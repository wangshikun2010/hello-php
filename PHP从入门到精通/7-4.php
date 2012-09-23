<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

Header("Content-type: image/png");
$im = imagecreate(440,400);
$black = imagecolorallocate($im,0,0,0);
$white = imagecolorallocate($im, 255, 255, 255);
$yellow = imagecolorallocate($im, 255, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);

$n = isset($_GET["n"]) ? intval($_GET["n"]) : 0;

imagefilledrectangle($im,5,5,395,395,$yellow);
imagestring($im,5,7,10, $n, $black);

for ($i=1; $i<360; $i++) {
	$temp = 150*sin(2*(pi()/180)*$i);
	$x = $temp*cos((pi()/180)*$i)+200;
	$y = $temp*sin((pi()/180)*$i)+200;
	imagesetpixel($im,$x,$y,$red);

	$temp = 150*cos(2*(pi()/180)*$i);
	$x = $temp*cos((pi()/180)*$i)+200;
	$y = $temp*sin((pi()/180)*$i)+200;
	imagesetpixel($im,$x,$y,$blue);
}

imagepng($im);
imagedestroy($im);
