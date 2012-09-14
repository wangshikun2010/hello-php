<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>使用三角形函数结合GD函数来实现画图功能</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	Header("Content-type: image/png");
    	$im = imagecreate(440,400);
    	$black = imagecolorallocate($im,0,0,0);
    	$white = imagecolorallocate($im, 255, 255, 255);
    	$yellow = imagecolorallocate($im, 255, 255, 0);
    	$blue = imagecolorallocate($im, 0, 0, 255);
    	$red = imagecolorallocate($im, 255, 0, 0);

    	imagefilledrectangle($im,5,5,395,395,$yellow);

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

    	imagePNG($im);
    	imageDesroy($im);

    	imagestring($im,5,270,60,"to :YOU as a gif", $white);
    	imagestring($im,5,305,80,date(Y).".".date(m).".".date(d), $white);
    	imagepng($im);
    	imagedestroy($im);
    ?>
</body>
</html>