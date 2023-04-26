<?php
/* Integer */
$x = 5; //integer as base 10 represtation
$y = 0x2A; //integer as hexadecimal number or base 16 representation
$z = 055; //integers as octal numbers
$a = 0b111; //integers as binary numbers
echo "$x integer as base 10 decimal";
echo "<br/>";
echo "$y integer as hexadecimal base 16";
echo "<br/>";
echo "$z integer as octal numbers";
echo "<br/>";
echo "$a integer as binary number";
echo "<br/>";
/*Integer overflow */
echo "integer overflow";
echo "<br/>";
$k = PHP_INT_MAX; //returns max value of an integer
var_dump($k);
echo "<br/>";
$k=$k+1; //when integer overflow happens it will automatically gets converted to float
var_dump($k);
echo "<br/>";
var_dump(is_int($k));
echo "<br/>";
//casting a float value to integer
echo "casting float into integer";
echo "<br/>";
$k = (int)$k;
var_dump($k);
echo "<br/>";
