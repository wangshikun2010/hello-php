<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>单独给数组的每个元素赋值</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$string[0] = "string1";
    	$string[1] = "string2";
    	$string[2] = "string3";
    	$string[3] = "string4";
    	$string[4] = "string5";

    	for ($i=0; $i<count($string); $i++) {
    		echo $string[$i];
    		echo "<br/>";
    	}
    ?>
</body>
</html>