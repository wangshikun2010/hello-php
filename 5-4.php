<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>switch...case多重判断使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
	<?php
		switch (date("D")) {
			case "Mon":
				echo "星期一";
				break;
			case "Tue":
				echo "星期二";
				break;
			case "Wed":
				echo "星期三";
				break;
			case "Thu":
				echo "星期四";
				break;
			case "Fri":
				echo "星期五";
				break;
			default:
				echo "周末";
				break;
		}
	?>
</body>
</html>