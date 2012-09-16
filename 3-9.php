<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>同时给多维数组的所有元素赋值</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$string = array(
    		0=>array(0,1,2,3),
    		1=>array("wang","shi","kun"),
    		2=>array("你好","我好","大家好"),
    	);

    	for ($i=0; $i<count($string); $i++) {
    		for ($j=0; $j<count($string[$i]); $j++) {
    			echo $string[$i][$j];
    			echo ",";
    		}
    		echo "<br/>";
    	}

        echo "<pre>";
        var_dump(array(0,1,2,3));
        print_r(array(0,1,2,3));
        print_r($string);
        var_dump(null);
        echo "</pre>";
    ?>
</body>
</html>