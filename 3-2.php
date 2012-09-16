<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php中预定义常量的的使用</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	echo "所使用的文件名是：";
    	echo __FILE__;
    	echo "<br>";
    	echo "文件的行数：";
    	echo __LINE__;
    	echo "<br>";
    	echo "php的版本：";
    	echo PHP_VERSION;
    	echo "<br>";
    	echo "所使用的操作系统的文件名：";
    	echo PHP_OS;
    ?>
</body>
</html>