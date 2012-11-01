<?php
//getimagesize()

$size = getimagesize('./img/glyphicons-halflings.png', $info);
if (isset($info["APP13"])) {
    $iptc = iptcparse($info["APP13"]);
    var_dump($iptc);
}
var_dump($size);
list($width,$height,$type,$attr) = $size;
echo "<img src=\"./img/glyphicons-halflings.png\" $attr />"."<p>";
echo '该图像的宽为: '.$width.'<p>';
echo '该图像的高为: '.$height.'<p>';
$keys = array(
	'1' => 'GIF',
	'2' => 'JPG',
	'3' => 'PNG',
	'4' => 'SWF',
	'5' => 'PSD',
	'6' => 'BMP',
	'7' => 'TIFF(intel byte order)',
	'8' => 'TIFF(motorola byte order)',
	'9' => 'JPC',
	'10' => 'JP2',
	'11' => 'JPX',
	'12' => 'JB2',
	'13' => 'SWC',
	'14' => 'IFF',
	'15' => 'WBMP',
	'16' => 'XBM',
);
var_dump($keys);
foreach ($keys as $key => $value) {
	if ($type == $key) {
		echo '该文件的图像类型为: '.$value;
	}
}

//将图片以读的方式并以二进制打开
// $handle = fopen('./img/glyphicons-halflings.png','rb');
// var_dump($handle);
