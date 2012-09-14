<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>max函数使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	echo "1,3,5,6,7中最大的数字是：";
    	echo max(1,3,5,6,7);
    	echo "<p>";

    	echo "数组array(1,5,8,7)中最大的数字是：";
    	echo max(array(1,5,8,7));
    	echo "<p>";

    	echo "0与hello中最大的是：";
    	echo max(0,'hello');
    	echo "<p>";

    	echo "hello与0中最大的是：";
    	echo max('hello',0);
    	echo "<p>";

    	echo "-1与hello中最大的是：";
    	echo max(-1,'hello');
    	echo "<p>";

    	echo "数组array(2,4,8)与数组array(2,5,7)中最大的数字是：";
    	$val = max(array(2,4,8),array(2,5,7));
    	for ($i=0; $i<count($val); $i++) {
    		echo $val[$i];
    		echo ", ";
    	}
    	echo "<p>";

		echo "数组array(2,5,7)与string和42中最大的数字是：";
    	$val = max('string', array(2,5,7), 42);
    	for ($i=0; $i<count($val); $i++) {
    		echo $val[$i];
    		echo ", ";
    	}
    ?>
</body>
</html>