<?php
//绘画十二角星
require 'color.php';

imagefilledrectangle($im,5,5,415,415,$white);

imageline($im,210,10,110,210+100*sqrt(3), $blue);
imageline($im,210,10,310,210+100*sqrt(3), $blue);
imageline($im,210,410,110,210-100*sqrt(3), $blue);
imageline($im,210,410,310,210-100*sqrt(3), $blue);
imageline($im,10,210,210+100*sqrt(3),110, $blue);
imageline($im,10,210,210+100*sqrt(3),310, $blue);
imageline($im,410,210,210-100*sqrt(3),110, $blue);
imageline($im,410,210,210-100*sqrt(3),310, $blue);
imageline($im,110,210-100*sqrt(3),210+100*sqrt(3),310, $blue);
imageline($im,110,210+100*sqrt(3),210+100*sqrt(3),110, $blue);
imageline($im,210-100*sqrt(3),110,310,210+100*sqrt(3), $blue);
imageline($im,210-100*sqrt(3),310,310,210-100*sqrt(3), $blue);

imagepng($im);
imagedestroy($im);