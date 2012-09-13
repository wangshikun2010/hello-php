<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数返回值的使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function cube($num) {
    		return $num*$num*$num;
    	}

    	$i = 3;
    	echo $i."的立方为: ".cube(3);
    ?>
</body>
</html>