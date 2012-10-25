<?php
//删除分类

require 'functions.php';

delete_category($_GET['id']);

header('Location: category.php');

