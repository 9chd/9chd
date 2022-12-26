<?php
   $servername = 'localhost';
   $username = 'steven';
   $password = 'Illawarra(555)';
   $dbname = "9chd_home";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT item_id, datestamp, temperature, humidity FROM study';


   $result = $conn->query($sql);

   if ($result->num_rows > 0) 
      {
         // output data of each row
         echo "Datestamp:           Temperature:          Humidity:";
         echo "<br>";
         while($row = $result->fetch_assoc()) 
            {
               echo "Datestamp: " . $row["datestamp"]. " - Temperature: " . $row["temperature"]. " - Humidity: " . $row["humidity"]. "<br>";
               echo  . $row["datestamp"].  . $row["temperature"].  . $row["humidity"]. "<br>";
            }
      } 
   else 
      {
         echo "0 results";
      }

   $conn->close();

   // Works to here
   
 
?>
