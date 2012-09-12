<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>使用continue跳出本次循环</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$i = 1;
    	while($i < 10) {
    		$i++;

    		if ($i == 5) {
    			continue;
    		}

    		echo "第".$i."次循环<br/>";
    	}
    ?>
</body>
</html>