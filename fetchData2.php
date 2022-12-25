<?php
   $dbhost = 'localhost';
   $dbuser = 'steven';
   $dbpass = 'Illawarra(555)';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
