<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo "welcome to my site!"?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <h3>Welcome!</h3>
    <?php
    	print "<p>this is a php  example</p>";
    	$date = date("D");
    ?>
    <h3>today's date is <?php echo $date;?></h3>
    <?php
    	print ("<p>this is a php  example</p>");
    ?>
    <?php
    	echo ("<p>this is a php  example</p>");
    ?>
    <?php
    	$season = "example";
    	print ("<p>this is a php  $season</p>");
    ?>
    <?php
    	echo ("<p>this is a php
    	example</p>");
    ?>
    <?php
    	$h = "wang";
    	$w = "shikun";
    	echo '<p>,$h, and ,$w</p>';
    	echo "<br/>";
    	echo $h." and ".$w;
    	echo "<br/>";
    ?>
    <?php
    	printf("$%01.2f",43.2);
    	echo "<p>";
    	printf("%d been %s",20,"wang");
    	echo "<p>";
    	printf("%15s","some text");
    	echo "<p>";
    	printf("the %2\$s likes to %1\$s","bark","dog");
    	echo "<p>";
    	printf("wo shuo %1\$s: %2\$s,%2\$s","wang","kun");
    	echo "<p>";
    	printf("wo shuo %1\$s: %2\$f,%2\$d","wang","kun");
    ?>
    <?php
   		$cost = sprintf("$%01.2f",43.2);
   		echo "<br/>";
   		echo $cost;
   		$color = "wangshkun";
   		echo $color[2];
    ?>
</body>
</html>