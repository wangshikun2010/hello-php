<?php
require 'color.php';

imagefilledrectangle($im,20,20,150,150,$blue);

for ($i=0; $i < 360; $i++) {
	$temp = 150*sin(2*(pi()/180)*$i);
	$x = $temp*cos((pi()/180)*$i)+300;
	$y = $temp*sin((pi()/180)*$i)+300;
	imagesetpixel($im,$x,$y,$red);
	$temp = 150*cos(2*(pi()/180)*$i);
	$x = $temp*cos((pi()/180)*$i)+300;
	$y = $temp*sin((pi()/180)*$i)+300;
	imagesetpixel($im,$x,$y,$zi);
}

imagepng($im);
imagedestroy($im);
