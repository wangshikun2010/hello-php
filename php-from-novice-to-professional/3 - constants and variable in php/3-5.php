<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>同时给数组的所有元素赋值例子</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
	<?php
		//定义一个数组同时给数组所有元素赋值
    	$string = array("string1","string2","string3","string4","string5");
    	echo implode("<br>", $string);

    	for($i=0; $i<count($string); $i++) {
    		echo $string[$i];
    		echo "<br/>";
    	}
    ?>
</body>
</html>