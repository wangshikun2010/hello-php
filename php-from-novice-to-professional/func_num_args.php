<?php
//func_num_args函数返回当前函数参数的数量

function foo() {
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br/>";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br/>";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br/>";
    }
}

foo("dfsd");
echo "<p>";
foo(1,2,3);
echo "<p>";

//func_get_arg函数返回指定位置的参数的值
function foo1() {
	$numargs = func_num_args();
	echo "Number of arguments: $numargs<br/>";
	if($numargs >= 2) {
		echo "Second Argument is: ".func_get_arg(2)."<br/>";
	}
}

foo1("one","two","three","four");
echo "<p>";
foo1(45,25,62,8);
echo "<p>";

//func_get_args函数返回包含当前所有参数的一个数组
function foo2() {
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br/>";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(0) . "<br/>";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br/>";
    }
    print_r($arg_list);
    print_r(func_get_args());
}

foo2(4,8,5,78);