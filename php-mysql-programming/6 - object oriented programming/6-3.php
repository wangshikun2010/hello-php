<?php
/*

 @authors leon <kairyou@qq.com>
          you
*/
//使用extends可以继承另一个类的方法和成员
class ExtendClass extends simpleClass {
    //重新定义父类的方法
    function displayVar()
    {
        echo "Extending class";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();
