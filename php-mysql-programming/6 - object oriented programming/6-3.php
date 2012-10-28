<?php

require "6-2.php";

//使用extends可以继承另一个类的方法和成员
class ExtendClass extends simpleClass {
    //重新定义父类的方法
    function displayVar() {
        echo "Extending class", PHP_EOL;
        echo '<br/>';
        parent::displayVar();
    }
}

$extended = new ExtendClass();
echo '<br/>';
$extended->displayVar();
