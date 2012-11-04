<?php
//将某个图像缩小

function resizeimage($srcfile, $rate = 0.5) {
	$size = getimagesize($srcfile);

	switch ($size[2]) {
		case '1':
			$img = imagecreatefromgif($srcfile);
			break;
		case '2':
			$img = imagecreatefromjpeg($srcfile);
			break;
		case '3':
			$img = imagecreatefrompng($srcfile);
			break;
	}

	//取得源图像的高度,宽度
	$srcw = imagesx($img);
	$srch = imagesy($img);

	//目的图像高度,宽度
	$dstw = floor($srcw*$rate);
	$dsth = floor($srch*$rate);

	$im = imagecreate($dstw,$dsth);
	$background = imagecolorallocate($im, 223, 223, 223);

	imagecopyresized($im, $img, 0, 0, 0, 0, $dstw, $dsth, $srcw, $srch);
	header('Content-type: image/png');
	imagepng($im);
	imagedestroy($img);
	imagedestroy($im);
}

resizeimage('./img/glyphicons-halflings.png');