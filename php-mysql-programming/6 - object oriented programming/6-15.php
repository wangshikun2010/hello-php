<?php
// is_subclass_of(object, class_name)判断一个对象是否继承自某个类
class People {
	public $name = 'zhang san';
}

class People_child extends People {
	//do something
}

$People = new People();
$People_child = new People_child();

if(is_subclass_of($People_child, 'People')) {
	echo '$People_child对象继承自People类<br/>';
}

if(is_subclass_of($People, 'People')) {
	echo '$People对象继承自People类<br/>';
}

if(is_subclass_of('People_child', 'People')) {
	echo 'People_child类继承自People类<br/>';
}


interface I {}

class A implements I {}
class B extends A  {}

if (is_subclass_of('A', 'I')) {
    echo 'good<br>';
} else {
    echo 'bad<br>';
}

if (is_subclass_of('B', 'I')) {
    echo 'good<br>';
} else {
    echo 'bad<br>';
}

if (is_subclass_of('B', 'A')) {
    echo 'good<br>';
} else {
    echo 'bad<br>';
}

//判断一个类是否继承自另一个类时,可以子类或者是子类的子类
class One {};
class Two extends One {};
class Three extends Two {};

$foo = new Three();
echo ((is_subclass_of($foo,'One')) ? 'true' : 'false');


