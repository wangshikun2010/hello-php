<?php
//声明全局变量
$somevar = 15;
function addit() {
	GLOBAL $somevar;
	$somevar++;
	print "Somever is $somevar";
}
addit();
echo "<br/>";

$some = 20;
function add() {
	$GLOBALS["some"]++;
}
add();
print "some is ".$GLOBALS["some"];
echo "<br>";

//静态变量
function keep_track() {
	$count = 0;
	$count++;
	echo $count;
	echo "<br/>";
}
keep_track();
keep_track();
keep_track();

function keep_track1() {
	STATIC $w = 0;
	$w++;
	echo $w;
	echo "<br/>";
}
keep_track1();
keep_track1();
keep_track1();