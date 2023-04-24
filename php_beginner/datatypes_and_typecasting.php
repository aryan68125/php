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
