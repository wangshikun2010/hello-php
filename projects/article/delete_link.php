<?php
//删除链接

require 'functions.php';

delete_link($_GET['id']);

header('Location: index.php');

