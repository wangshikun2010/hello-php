<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php运算符优先级使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$a = 3;
    	echo "\$a = 3&nbsp;&nbsp;";
    	echo "++\$a为：";
    	echo ++$a;
    	echo "<p>";

    	$a = 3;
    	echo "\$a = 3&nbsp;&nbsp;";
    	echo "\$a++为：";
    	echo $a++;
    ?>
</body>
</html>