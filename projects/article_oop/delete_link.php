<?php
//删除链接

require 'functions.php';
$collection = new LinkCollection(LINK_DATA_FILE);

$collection->delete($_GET['id']);

header('Location: index.php');

