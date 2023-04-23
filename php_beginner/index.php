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
