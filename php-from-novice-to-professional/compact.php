<?php
//compact函数---创建一个由参数所带变量组成的数组

$name = "wang shi kun";
$gender = "man";
$age = "19";
print_r(compact("name","gender","age"));
echo "<p>";

$firstname = "Peter";
$lastname = "Griffin";
$age = "38";
$name = array("firstname", "lastname");
$result = compact($name,"age");
print_r($result);