 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {
  $row = $result -> fetch_row();
  // Display field lengths
  foreach ($result -> lengths as $i => $val) {
    printf("Field %2d has length: %2d\n", $i + 1, $val);
  }
  $result -> free_result();
}

$mysqli -> close();
?> 
