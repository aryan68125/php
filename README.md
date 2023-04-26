# PHP
### Basic printing
```
<?php
echo "Hello Aditya Kumar Das From Lucknow ";
echo print "Hello Aditya Kumar Das From Lucknow ";
print ' Hello world print statement ';
echo "Aditya's email address ";
```
### Data types and Type casting
There are 3 types of data types :
* Scalar types - bool, int, float, string
* Compund types - array, object, callable, iterable
* Special types - resource , null
```
<?php

/*
Data types and variables
*/
# Scalar types
   # bool
   $completed = true;
   # int
   $score = 97;
   # float
   $price  = 12.67;
   # string
   $greetings = (int)"512 "; //type casting string into integer
   echo "$completed <br />";
   echo "$score <br />";
   echo "$price <br />";
   echo "$greetings <br />";
   echo gettype($completed);
   echo "<br />";
   echo gettype($score);
   echo "<br />";
   echo gettype($price);
   echo "<br />";
   echo gettype($greetings);
   echo "<br />";
   var_dump($greetings);
   echo "<br />";

# Compund types
   # array
   $companies = [1,4,8,1.5,67.654,'Aditya', 'Kumar',true];
   echo "<br />";
   print_r ($companies);
   echo "<br />";
   # object
   # callable
   # iterable

# Special types
   # resource
   # null
```

### Basic operations in php
```
<!DOCTYPE html>
<html>
    <body>

         <h1>
           <?php  echo "Embedding php in HTML" ; ?>
         </h1>

         <h2>
           <?php
           $X = 10;
           $Y = 5;
           echo $X . " , " . $Y;
           ?>
         </h2>

         <!---php code to echo out html code directly from php--->

         <?php
         /*
           php code to echo html
         */
 	         $name = "php";
 	         echo "<h1>echo html  </h1> <p>using {$name}</p>";
           $name2 = "Aditya ";
           $name3 = "Kumar";
           echo "<h1>{$name2} </h1> <p>{$name3}</p>"
         ?>
         <?php
         $X = 10;
         $Y = 5;
         echo "<h1>{$X}  </h1> <p>{$Y}</p>";

         define('STATUS_PAID', 'paid');
         echo  STATUS_PAID;

         const STATUS_LIVE = 'true';
         echo STATUS_LIVE;

         $nano = 'DONE';
         define('STATUS_'. $nano , 'nano');
         echo STATUS_DONE;
         ?>

    </body>
</html>
```
### variables
```
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
```
### Integer
```
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

```
### float
