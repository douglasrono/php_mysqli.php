 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {

  // Get field information for all fields
  $fieldinfo = $result -> fetch_fields();

  foreach ($fieldinfo as $val) {
    printf("Name: %s\n", $val -> name);
    printf("Table: %s\n", $val -> table);
    printf("Max. Len: %d\n", $val -> max_length);
  }
  $result -> free_result();
}

$mysqli -> close();
?> 
