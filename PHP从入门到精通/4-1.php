<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>php逻辑运算符使用实例</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$a = true;
    	$b = false;

    	if($a and $b) {
    		echo "这里为假1";
    	}
    	echo "<br/>";

    	if($a or $b) {
    		echo "这里为真1";
    	}
    	echo "<br/>";

    	if($a xor $b) {
    		echo "这里为真2";
    	}
    	echo "<br/>";

    	if(!$a) {
    		echo "这里为假2";
    	}
    	echo "<br/>";
    ?>
</body>
</html>