<?php
$servername = "localhost"; 
$username = "root";  // Change as per your MySQL credentials
$password = "";      // Change if necessary
$dbname = "project"; // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// $sql = $conn-> "insert into register (username, email, password, confirmPassword, phone) VALUES (?,?,?,?,?)";

if ($conn) {
  // echo "New record created successfully";
}
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);
?>






