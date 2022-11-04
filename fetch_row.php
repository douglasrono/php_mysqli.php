 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    printf ("%s (%s)\n", $row[0], $row[1]);
  }
  $result -> free_result();
}

$mysqli -> close();
?> 
