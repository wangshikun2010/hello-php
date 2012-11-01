<?php
//绘制一个三角形

require 'color.php';

imageline($im,100,50,300,50,$zi);
imageline($im,100,50,200,250,$zi);
imageline($im,200,250,300,50,$zi);

imageline($im,100,300,300,300,$yellow);
imageline($im,100,300,200,300+200*sin(pi()/3),$yellow);
imageline($im,200,300+200*sin(pi()/3),300,300,$yellow);

imagepng($im);
imagedestroy($im);