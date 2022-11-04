 <?php
$mysqli = new mysqli("localhost","400","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$charset = $mysqli -> character_set_name();
echo "Default character set is: " . $charset;

$mysqli -> close();
?> 
