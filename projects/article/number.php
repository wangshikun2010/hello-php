<?php
function foo() {
	static $a;
	$a++;
	echo "$a";
	unset($a);
}
