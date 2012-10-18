<?php
require "functions.php";

//写入一条信息
$links = write_data($_POST);
//debug($_POST);

header('Location: index.php');
