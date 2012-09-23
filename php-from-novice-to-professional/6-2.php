<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数有默认值参数的使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function text($text,$color="#000000") {
    		echo "<font color=".$color.">";
    		echo "<i><b>".$text."</b></i>";
    		echo "</font>";
    	}

    	$string = "php是一门编程艺术";
    	echo $string;
    	echo "<br/>";
    	echo text($string);
    	echo "<p>";
    	echo text($string,"red");
    ?>
</body>
</html>