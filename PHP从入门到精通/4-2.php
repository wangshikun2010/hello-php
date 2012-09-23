<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>三目运算符使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$date = Date("D"); //把当前的星期赋值给date
    	(($date == "Sun") or ($date == "Sat")) ? ($s = "周末") : ($s = "星期");
    	echo $s;
    ?>
</body>
</html>