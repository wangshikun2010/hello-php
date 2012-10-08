<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// phpinfo(); 查看某个扩展是否加载
// 代码相同目录下需要有ttf字体文件
// 代码出错: 打开所有级别的错误报告; 逐步确认代码的正确性

Header("Content-type: image/png");
$im = imagecreate(440,100);
$black = imagecolorallocate($im,0,0,0);
$white = imagecolorallocate($im, 255, 255, 255);
$yellow = imagecolorallocate($im, 255, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$zi = imagecolorallocate($im, 255, 0, 255);

$color = $blue;
$font = "wingdings.ttf";
imagefilledrectangle($im,5,5,435,95,$color);
imagestring($im,5,7,10,"l:send",$white);

for ($i=0; $i<5; $i++) {
	imagettftext($im,40,0,90+$i*50,57,$yellow,$font,"Z");
}

imagestring($im,5,270,60,"to :YOU as a gif", $white);
imagestring($im,5,305,80,date("Y-m-d"), $white);
imagepng($im);
imagedestroy($im);
?>
