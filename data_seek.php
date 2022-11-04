 <?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";

if ($result=mysqli_query($con,$sql))
  {
  // Seek to row number 15
  mysqli_data_seek($result,14);

  // Fetch row
  $row=mysqli_fetch_row($result);

  printf ("Lastname: %s Age: %s\n", $row[0], $row[1]);

  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?> 
