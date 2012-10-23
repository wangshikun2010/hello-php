<?php
require 'functions.php';

delete_link($_GET['id']);

header('Location: index.php');

