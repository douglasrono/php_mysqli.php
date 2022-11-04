<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Reset all and select a new database
$mysqli -> change_user("my_user", "my_password", "test");

$mysqli -> close();
?>
