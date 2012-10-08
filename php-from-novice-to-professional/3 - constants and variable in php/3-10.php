<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>单独给多维数组的每个元素赋值</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$string[0][0] = 0;
    	$string[0][1] = 1;
    	$string[0][2] = 2;
    	$string[0][3] = 3;

    	$string[1][0] = "wang";
    	$string[1][1] = "shi";
    	$string[1][2] = "kun";

    	$string[2][0] = "你好";
    	$string[2][1] = "我好";
    	$string[2][2] = "大家好";

    	for ($i=0; $i<count($string); $i++) {
    		for ($j=0; $j<count($string[$i]); $j++) {
    			echo $string[$i][$j];
    			echo ",";
    		}
    		echo "<br/>";
    	}
    ?>
</body>
</html>