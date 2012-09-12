<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php运算符优先级实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$a = 3 * 4 + 5 % 2;
    	echo $a."<br/>";

    	$a = true ? 0 : true ? 1 : 2;
    	echo $a."<br/>";

    	$a = 1;
    	$b = 2;
    	$a -= $b += 3* $b + $a;
    	echo $a.",".$b."<br/>";
    ?>
</body>
</html>