<?php
$value = 20;
$string = "50this is an string";
echo $value;
echo "<br/>";
echo gettype($value);
echo "<br/>";
echo $string;
echo "<br/>";
echo gettype($string);
echo "<br/>";

settype($value, "boolean");
settype($string, "int");

echo $value;
echo "<br/>";
echo gettype($value);
echo "<br/>";
echo $string;
echo "<br/>";
echo gettype($string);
