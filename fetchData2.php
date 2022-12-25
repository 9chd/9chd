<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'rootpassword';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   echo "Fetched data successfully\n";
   
 
?>
