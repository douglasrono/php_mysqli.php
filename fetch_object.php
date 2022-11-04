 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {
  while ($obj = $result -> fetch_object()) {
    printf("%s (%s)\n", $obj->Lastname, $obj->Age);
  }
  $result -> free_result();
}

$mysqli -> close();
?> 
