<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>if...else实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$cost = 1001;
    	if ($cost > 100) {
    		echo "太贵了，买不起<br/>";
    		echo "价钱是：$cost";
    	} else {
    		echo "还可以，就它了";
    	}
    ?>
</body>
</html>