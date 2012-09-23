<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php三角函数使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	echo "30°角的正弦值为：";
    	echo sin(pi()/6);
    	echo "<p>";
    	echo "270°角的正弦值为：";
    	echo sin(pi()/2*3);
    	echo "<p>";
    	echo "60°角的余弦值为：";
    	echo cos(pi()/3);
    	echo "<p>";
    	echo "0°角的余弦值为：";
    	echo cos(0);
    	echo "<p>";
    	echo "45°角的正切值为：";
    	echo tan(pi()/4);
    	echo "<p>";
    	echo "90°角的正切值为：";
    	echo tan(pi()/2);
    	echo "<p>";
    	echo "30°角的反正弦值为：";
    	echo asin(pi()/6);
    	echo "<p>";
    	echo "60°角的反余弦值为：";
    	echo acos(pi()/3);
    	echo "<p>";
    	echo "45°角的反正切值为：";
    	echo atan(pi()/4);
    	echo "<p>";
    ?>
</body>
</html>