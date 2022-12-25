<?php
   $servername = 'localhost';
   $username = 'steven';
   $password = 'Illawarra(555)';
   $dbname = "9chd_home";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT item_id, temperature, humidity FROM study';

   $retval = mysql_query( $sql, $conn );  

   echo "$retval successfully\n";
   
 
?>
