<?php

//explode()
$pizza  = 'piece1 piece2 piece3 piece4 piece5 piece6';
$pieces = explode(' ', $pizza);
var_dump($pieces);

$pieces = explode(' ', $pizza, 3);
var_dump($pieces);

$pieces = explode('c', $pizza);
var_dump($pieces);

$pieces = explode(' ', $pizza, -3);
var_dump($pieces);

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user;
echo $pass;

//implode()
$cites = array('shanghai', 'beijing', 'xian', 'guangzhou');
echo implode('|', $cites);
