<?php

require 'functions.php';

$collection = new CategoryCollection(CATEGORY_DATA_FILE);
$collection->delete($_GET['id']);

header('Location: category.php');

