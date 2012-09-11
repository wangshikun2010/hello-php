<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>动态的给元素添加示例的例子</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$string = array("string1","string2","string3","string4","string5");

    	echo "数组的第三个元素为：";
    	echo $string[2];
    	echo "<br/>";

    	echo "数组的第五个元素为：";
    	echo $string[4];
    	echo "<br/>";

    	echo "数组的第一个元素为：";
    	echo $string[0];
    	echo "<br/>";

    	$string[5] = "string6";
    	$string[6] = "string7";

		echo "数组的第六个元素为：";
    	echo $string[5];
    	echo "<br/>";

    	echo "数组的第七个元素为：";
    	echo $string[6];
    ?>
</body>
</html>