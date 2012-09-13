<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>函数的动态调用</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	function m1($text) {
    		echo "<font size=12px>";
    		echo $text;
    		echo "</font>";
    	}

    	function m2($text) {
    		echo "<font size=20px>";
    		echo "<ul>";
    		echo $text;
    		echo "</ul>";
    		echo "</font>";
    	}

    	$test = "m1";
    	$test("I like php");
    	echo "<p>";
    	$test = "m2";
    	$test("用php编程其实很简单");
    ?>
</body>
</html>