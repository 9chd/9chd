<?php
// (A) THIS PART IS PHP
$foo = "bar";
 
// (B) OUTPUT HTML AS-IT-IS ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Delimiters</title>
  </head>
  <body>
    <h1><?php
    // (C) THIS PART IS PHP AGAIN
    echo $foo;
    ?></h1>
  </body>
</html> 
