<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("SELECT * FROM Persons");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM Persons WHERE Age>32");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();
?>
