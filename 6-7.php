<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Examples</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
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
    	imagestring($im,5,305,80,date(Y).".".date(m).".".date(d), $white);
    	imagepng($im);
    	imagedestroy($im);
    ?>
</body>
</html>