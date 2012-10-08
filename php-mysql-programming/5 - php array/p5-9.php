<?php
$string = array("false","null","false");
print_r(array_unique($string));

$str = array("false","null","false");
print_r(array_count_values($str));