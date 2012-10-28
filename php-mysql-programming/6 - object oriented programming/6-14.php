<?php
//is_a()
class People {
	public $name = 'zhang san';
}

class People_child extends People {
	//do something
}

$People = new People();
$People_child = new People_child();

if(is_a($People,'People')) {
	echo '$people属于People这个类.<br/>';
}

if($People instanceof People) {
	echo '$people属于People这个类.<br/>';
}


if(is_a($People_child,'People')) {
	echo '$People_child属于People这个类的子类.<br/>';
}

if($People_child instanceof People) {
	echo '$People_child属于People这个类的子类.<br/>';
}


