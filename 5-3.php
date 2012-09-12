<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>if...else...else的多重判断</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$soure = 90;
    	if ($soure > 90) {
    		echo "成绩级别为：优";
    	} else if ($soure > 70) {
    		echo "成绩级别为：良";
    	} else if ($soure > 60) {
    		echo "成绩级别为：中";
    	}else {
    		echo "成绩级别为：差";
    	}
    ?>
</body>
</html>