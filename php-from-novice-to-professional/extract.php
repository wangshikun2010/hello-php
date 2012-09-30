<?php
//extract函数从数组中把变量导入当前的符号表中
require_once "functions.php";

$a = 'Original';
$my_array = array(
	"a" => "Cat",
	"b" => "Dog",
	"c" => "Horse"
);

extract($my_array, EXTR_PREFIX_SAME, "bb");
debug($a);
debug($bb_a);


// echo "\$a = $a; \$b = $b; \$c = $c";
// echo "<p>";

// extract($my_array, EXTR_PREFIX_SAME, 'dup');
// echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a;";