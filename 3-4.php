<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>settype()函数使用的例子</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
	<?php
		$foo = "5bar";
		$bar = true;
		echo $foo;
		echo "<p>";
		echo $bar;
		echo "<p>";
		settype($foo,"integer");
		settype($bar,"string");
		echo $foo;
		echo "<p>";
		echo $bar;
	?>
</body>
</html>