<?php
/* Boolean */
/* other data type that can be used as boolean evaluation */
// integer 0,-0 = false
// float 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

$isComplete = true;
if($isComplete)
{
  echo "true";
}
else
{
  echo "false";
}
