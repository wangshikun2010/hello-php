<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>流程控制综合实例运用</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
    <style type="text/css">
        table {
            border: 3px solid #000000;
            border-collapse: collapse;
        }

        tr {
            border: 1px solid #000000;
        }

        td {
            border: 1px solid #000000;

        }
    </style>
</head>
<body>
    <?php
    	$data = array(
    			0=>array("学生用书","学生教材","教辅用书","课外读物","考试习题"),
    			1=>array("名著","中国古典","世界名著","英文原著"),
    			2=>array("考试用书","公务员","会计师","医药师"),
    			3=>array("儿童读物","看图识字","动漫人物"),
    			4=>array("武侠小说","金庸小说","古龙小说","玄幻小说")
    	);

        $row_count = count($data);
        $col_count = 0;
        for ($i=0; $i<count($data); $i++) {
            if($col_count<count($data[$i])) {
                $col_count = count($data[$i]);
            }
        }

        echo "<table>";
    	for ($i=0; $i<$row_count; $i++) {
            echo "<tr>";
            if($i%2 == 0) {
                    echo "<tr bgcolor=\"#cccc00\">";
                } else {
                    echo "<tr bgcolor=\"#ccccff\">";
            }
    		for ($j=0; $j<$col_count; $j++) {
                echo "<td>";
    			echo isset($data[$i][$j]) ? $data[$i][$j] : " ";
    			echo "</td>";
    		}
            echo "</tr>";
    	}
        echo "</table>";
    ?>
</body>
</html>