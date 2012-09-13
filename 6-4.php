<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数将数组作为返回值的实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>

    <?php
        //看一下哪里出错了
    	function num($num1, $num2) {
    		if ($num1>$num2) {
    			$temp = $num1;
    			$num1 = $num2;
    			$num2 = $temp;
    		}

    		for ($i=$num1; $i<$num2; $i++) {
    			if ($i%2 == 0) {
    				$t[$j] = $i;
    				$j++;
    			}
    		}

    		return $t;
    	}

    	$a = 3;
    	$b = 20;
    	$c = num($a,$b);

    	echo $a."到".$b."之间的偶数是：";
    	for ($i=0; $i<count($c); $i++) {
    		echo $c[$i];
    		echo "<br/>";
    	}
    ?>
</body>
</html>