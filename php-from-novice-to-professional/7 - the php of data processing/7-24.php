<?php
//php数据处理--数组函数--自定义数组排序
$temp = array("班长","无职务","副班长","团支书","无职务","副班长");
function cmp($a,$b) {
	if($a == "团支书") {
		if($b == "团支书") {
			return 0;
		} else if($b == "班长"){
			return -1;
		} else if($b == "副班长") {
			return -1;
		} else {
			return -1;
		}
	} else if($a == "班长") {
		if($b == "团支书") {
			return 1;
		} else if($b == "班长"){
			return 0;
		} else if($b == "副班长") {
			return -1;
		} else {
			return 1;
		}
	} else if($a == "副班长") {
		if($b == "团支书") {
			return 1;
		} else if($b == "班长"){
			return 1;
		} else if($b == "副班长") {
			return 0;
		} else {
			return -1;
		}
	} else {
		if($b == "团支书") {
			return 1;
		} else if($b == "班长"){
			return 1;
		} else if($b == "副班长") {
			return 1;
		} else {
			return 0;
		}
	}
}

echo "数组temp原始顺序：";
echo "<p>";
for ($i=0; $i<count($temp); $i++) {
	echo $temp[$i].",";
}
usort($temp,"cmp");
echo "<p>";
echo "数组temp经过usort处理过的顺序为：";
echo "<p>";
for ($i=0; $i<count($temp); $i++) {
	echo $temp[$i].",";
}
