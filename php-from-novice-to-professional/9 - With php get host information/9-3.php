<?php
/*
checkdate(月,日,年)检查日期的合法性
*/

if(checkdate(12,30,2005)) {
	echo '2005年12月30日是合法日期';
} else{
	echo '2005年12月30日不是合法日期';
}

echo '<p>';

if(checkdate(10,31,2012)) {
	echo '2012年10月31日是合法日期';
} else{
	echo '2012年10月31日不是合法日期';
}