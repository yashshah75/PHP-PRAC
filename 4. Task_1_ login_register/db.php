<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// SQL CONNECTION CHECK
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>