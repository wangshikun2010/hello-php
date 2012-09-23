<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数自定义实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
	<?php
	    function my_f($num1, $num2) {
	    	if($num1>$num2) {
	    		$temp = $num1;
	    		$num1 = $num2;
	    		$num2 = $temp;
	    	}

	    	$s = $num2;
	    	$i = 1;
	    	while($s%$num1 != 0) {
	    		$s = $num2 * $i;
	    		$i++;
	    	}
	    	return $s;
	    }

	    echo my_f(1,3);
	    echo "<p>";
	    echo my_f(4,52);
	    echo "<p>";
	    echo my_f(7,5);
	    echo "<p>";
	    echo my_f(45,2);
	    echo "<p>";
	    echo my_f(52,45);
	    echo "<p>";
	?>
</body>
</html>