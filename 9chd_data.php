<!DOCTYPE html>
<html><body>
<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com/esp32-esp8266-mysql-database-php/
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

$servername = "localhost";

// REPLACE with your Database name
$dbname = "9chd_home";
// REPLACE with Database user
$username = "steven";
// REPLACE with Database user password
$password = "Illawarra(555)";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT item_id, datestamp, temperature, humidity FROM study ORDER BY item_id";

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>ID</td> 
        <td>Datestamp</td> 
        <td>Temperature</td> 
        <td>Humidity</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["item_id"];
        $row_datestamp = $row["datestamp"];
        $row_temperature = $row["temperature"];
        $row_humidity = $row["humidity"];

      
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_datestamp . '</td> 
                <td>' . $row_temperature . '</td> 
                <td>' . $row_humidity . '</td> 
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>
