<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>流程控制综合实例运用</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <?php
    	$type = array(
    			0=>array("学生用书","学生教材","教辅用书","课外读物","考试习题"),
    			1=>array("名著","中国古典","世界名著","英文原著"),
    			2=>array("考试用书","公务员","会计师","医药师"),
    			3=>array("儿童读物","看图识字","动漫人物"),
    			4=>array("武侠小说","金庸小说","古龙小说","玄幻小说")
    	);

    	for ($i=0; $i<count($type); $i++) {
    		$s = 0;
    		for ($j=0; $j<count($type[$i]); $j++) {
    			if($s%2 == 0) {
    				echo "<tr>";
    			}
    			$s++;

    			if($j == 0) {
    				echo "<td colspan=2 bgcolor=\"#cccc00\">";
    			} else {
    				echo "<td bgcolor=\"#ccccff\">";
    			}

    			echo $type[$i][$j];
    			echo "</td>";

    			if($j == 0) {
    				$s++;
    			}

    			if($s%2 == 0) {
    				echo "</tr>";
    			}

    			if($s == (count($type[$i]+1)) && count($type[$i]%2 == 0)) {
    				echo "<td bgcolor=\"#ccccff\">&nbsp;</td></tr>";
    			}
    		}
    	}
    ?>
</body>
</html>