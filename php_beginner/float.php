<?php
$x = 13.5;
echo $x;
echo "<br/>";
echo "you can also represent float in form of exponents";
echo "<br/>";
$y = 13.5e4;
echo $y;
echo "<br/>";
$z = 13.5e-4;
echo $z;
echo "<br/>";

echo "Never compare two floating point numbers directly for equality";
echo "<br/>";
$a = 0.23;
$b = (1-0.77);
var_dump($a, $b);
echo "<br/>";
if($a == $b)
{
  echo "yes";
  echo "<br/>";
}
else {
  echo "no";
  echo "<br/>";
}
echo "Never compare a variable directly to infinity or nan";
echo "<br/>";
$d = PHP_FLOAT_MAX * 2;
var_dump($d);
echo "<br/>";
var_dump(is_infinite($d));
echo "<br/>";
