<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>使用break跳出循环</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$i = 1;
    	while($i < 10) {
    		echo "第".$i."次循环<br/>";
    		$i++;

    		if ($i == 5) {
    			break;
    		}
    	}
    ?>
</body>
</html>