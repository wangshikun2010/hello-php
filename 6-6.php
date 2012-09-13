<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php库函数</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$a[0] = 1;
    	$a[1] = 3;
    	$a[2] = 2;
    	$a[3] = 1;
    	$a[4] = 2;
    	$a[5] = 1;
    	$a[6] = 4;
    	$a[7] = 3;
    	print_r(array_count_values($a));
    ?>
</body>
</html>