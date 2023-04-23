<?php
$firstname = "Aditya";
echo "hello $firstname" ;

$name = "Aastha kumar";
echo $name;

echo " demonstrating assign by value ";
$x = 1;
$y = $x;
$x = 3;
echo $y, " y's value";

echo " demonstrating assign by reference ";
$x = 1;
$y = &$x;
$x = 3;
echo $y, " y's value";
