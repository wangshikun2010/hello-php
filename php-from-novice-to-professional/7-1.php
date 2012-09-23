<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php判断数据使用类型</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$num1 = 123;
    	$arr  = array(1,2,3,4,5,6,7);
    	$bool = false;
    	$b    = null;
    	$num2 = 3.14159;
    	$string1 = "123456";
    	$string2 = "hello world!";

    	//定义一个对象
    	class foo {
    		function do_foo() {
    			echo "doing foo.";
    		}
    	}

    	$bar = new foo;

    	if(is_array($arr)) {
    		echo $arr."是数组";
    		echo "<br>";
    	}
    	if(!is_array($num1)) {
    		echo $num1."不是数组";
    		echo "<br>";
    	}
    	if(!is_bool($num1)) {
    		echo $num1."不是布尔型";
    		echo "<br>";
    	}
    	if(is_bool($bool)) {
    		echo $bool."布尔型";
    		echo "<br>";
    	}
    	if(!is_float($num1)) {
    		echo $num1."不是浮点型";
    		echo "<br>";
    	}
    	if(is_float($num2)) {
    		echo $num2."是浮点型";
    		echo "<br>";
    	}
    	if(is_int($num1)) {
    		echo $num1."是整形";
    		echo "<br>";
    	}
    	if(!is_int($num2)) {
    		echo $num2."不是整形";
    		echo "<br>";
    	}
    	if(is_numeric($string1)) {
    		echo $string1."是数字";
    		echo "<br>";
    	}
    	if(!is_numeric($string2)) {
    		echo $string2."不是数字";
    		echo "<br>";
    	}
    	if(is_object($bar)) {
    		print_r($bar);echo "是object";
    		echo "<br>";
    	}
    	if(!is_object($num1)) {
    		echo $num1."不是object";
    		echo "<br>";
    	}
    	if(is_scalar($num1)) {
    		echo $num1."是标量";
    		echo "<br>";
    	}
    	if(!is_scalar($arr)) {
    		echo $arr."不是标量";
    		echo "<br>";
    	}
    	if(!is_string($num1)) {
    		echo $num1."不是字符串";
    		echo "<br>";
    	}
    	if(is_string($string1)) {
    		echo $string1."是字符串";
    		echo "<br>";
    	}
    	if(isset($string1)) {
    		echo $string1."有值";
    		echo "<br>";
    	}
    	if(!isset($a)) {
    		echo "无值或值为null";
    		echo "<br>";
    	}
    	if(!isset($b)) {
    		echo "无值或值为null";
    	}
    ?>
</body>
</html>