 <?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$mysqli -> query("SELECT * FROM Friends");
// Get number of columns - will return 3
$mysqli -> field_count();

$mysqli -> close();
?> 
