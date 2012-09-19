<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php中常量的定义和使用</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	define("name","valueAS",true);
    	echo name."<br/>";
    	echo NAME."<br/>";

    	define("message","this is a define",false);
    	echo message."<br/>";
    	//echo MESSAGE."<br/>";

    	$test = "message";
    	echo constant($test)."<br/>";
    	echo $test."<br/>";
    	echo defined("name");
    ?>
</body>
</html>