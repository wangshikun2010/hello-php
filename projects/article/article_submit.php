<?php
require "article_functions.php";
require "article_config.php";

$links = write_data($_POST);
//debug($_POST);

header('Location: article_display.php');
