<?php
require 'functions.php';

class Staff {
  public $name = 'zhangsan';
  public $age = '30';
  public $sex = '男';
  public $ages;

  function display($name) {
    $this->name = $name;
  }
}

$people = new Staff();

debug(get_class_vars('Staff'));

debug(get_declared_classes());

debug(get_object_vars($people));

