<?php
   $dbhost = 'localhost';
   $dbuser = 'steven';
   $dbpass = 'Illawarra(555)';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT item_id, temperature, humidity FROM study';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "ID :{$row['item_id']}  <br> ".
         "Temperature : {$row['temperature']} <br> ".
         "Humidity : {$row['humidity']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
