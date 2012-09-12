<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php运算符表达式综合运用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$a = "123";
    	$b = 321;
    	echo $a+$b;
    	echo "<br/>";
    	echo $a*$b;
    	echo "<br/>";
    	$a = 123;
    	$b = 321;
    	echo $b > $a;
    	echo "<br/>";
    	echo $a-23+$b += $a%3 ? 50 : 30;
    	echo "<br/>";
    	$a = 123;
    	$b = 321;
    	$a = $b;
    	echo $a == $b;
    ?>
</body>
</html>