<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>用cookie实现网站风格</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link type="text/css" href="style<?php echo $_COOKIE['style']; ?>.css" rel="stylesheet">
</head>
<body>
    <table>
    	<tr>
    		<td><a href="11-8.php?style=1">风格1</a></td>
    		<td><a href="11-8.php?style=2">风格2</a></td>
    		<td><a href="11-8.php?style=3">风格3</a></td>
    		<td><a href="11-8.php?style=2">风格4</a></td>
    	</tr>
    	<tr>
    		<td colspan='4'><h1>慧能<h1></td>
    	</tr>
    	<tr>
    		<td colspan='4'><h2>菩提本无树<h2></td>
    	</tr>
    	<tr>
    		<td colspan='4'><h2>明镜亦非台<h2></td>
    	</tr>
    	<tr>
    		<td colspan='4'><h2>本来无一物<h2></td>
    	</tr>
    	<tr>
    		<td colspan='4'><h2>何处惹尘埃<h2></td>
    	</tr>
    </table>
</body>
</html>