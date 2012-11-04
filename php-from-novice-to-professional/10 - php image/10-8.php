<?php
//绘画五角星
require 'color.php';

imagefilledrectangle($im,5,5,395,395,$white);
$m = 200;
$n = sqrt($m*$m+$m*$m-2*$m*$m*cos(3*pi()/5));
$a = cos(2*pi()/5)*$n;
$b = sin(2*pi()/5)*$n;
$c = cos(pi()/5)*$m;
$d = sin(pi()/5)*$m;
imageline($im,200,50,200-$a,50+$b, $red);
imageline($im,200,50,200+$a,50+$b, $red);
imageline($im,200-$c,50+$d,200+$a,50+$b, $red);
imageline($im,200+$c,50+$d,200-$a,50+$b, $red);
imageline($im,200-$c,50+$d,200+$c,50+$d, $red);

imagepng($im);
imagedestroy($im);