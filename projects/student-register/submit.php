<?php

require "functions.php";
require "config.php";

$students = write_data($_POST);

// debug($_POST);
// exit();

header('Location: display.php?student_id=' . $_POST['student_id']);
