<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数的递归实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function Fibanacci($num) {
    		if ($num==1 || $num==2) {
    			return 1;
    		} else {
    			return Fibanacci($num-1) + Fibanacci($num-2);
    		}
    	}

    	echo "斐波那契数列的第1项为：";
    	echo Fibanacci(1);
    	echo "<p>";
    	echo "斐波那契数列的第12项为：";
    	echo Fibanacci(12);
    	echo "<p>";
    	echo "斐波那契数列的第7项为：";
    	echo Fibanacci(7);
    	echo "<p>";
    	echo "斐波那契数列的第20项为：";
    	echo Fibanacci(20);
    ?>
</body>
</html>