 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {

  // Get field information for column "Age"
  $fieldinfo = $result -> fetch_field_direct(1);

  printf("Name: %s\n", $fieldinfo -> name);
  printf("Table: %s\n", $fieldinfo -> table);
  printf("Max. Len: %d\n", $fieldinfo -> max_length);
  $result -> free_result();
}

$mysqli -> close();
?> 
