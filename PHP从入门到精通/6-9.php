<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>自定义函数的使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function my_f($num1,$num2,$num3) {
    		if (($num2*$num2-4*$num1*$num3)<0) {
    			echo "方程没有实根";
    		} else if(($num2*$num2-4*$num1*$num3)==0) {
    			echo "方程有一个实根：<p>";
    			echo (-$num2+sqrt($num2*$num2-4*$num1*$num3)) / (2*$num1);
    		} else {
    			echo "方程有两个实根";
    			echo (-$num2+sqrt($num2*$num2-4*$num1*$num3)) / (2*$num1);
				echo ",";
				echo (-$num2-sqrt($num2*$num2-4*$num1*$num3)) / (2*$num1);
    		}
    	}

    	echo "方程：2x<sup>2</sup>+3x+1=0的根为：<p>";
    	my_f(2,3,1);
    	echo "<p>";
    	echo "方程：x<sup>2</sup>+9x+1=0的根为：<p>";
    	my_f(1,-6,9);
    	echo "<p>";
    	echo "方程：3x<sup>2</sup>+2x+1=0的根为：<p>";
    	my_f(3,2,1);
    ?>
</body>
</html>