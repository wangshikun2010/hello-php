<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数参数的使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function text($text) {
    		echo "<b><i>".$text."</i></b>";
    	}

    	$string = "php是一门编程";
    	echo $string;
    	echo "<br/>";
    	text($string);
    ?>
</body>
</html>