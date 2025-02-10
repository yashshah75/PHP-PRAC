<?php
$servername = "localhost"; 
$username = "root";  // Change as per your MySQL credentials
$password = "";      // Change if necessary
$dbname = "project"; // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Set charset for security
// mysqli_set_charset($conn, "utf8mb4");


// $sql = 'INSERT INTO register (username, email, password, confirmPassword, phone) VALUES ($username,$email, $password, $confirmPassword,"$phone",)';
$sql = $conn-> "insert into register (username, email, password, confirmPassword, phone) VALUES (?,?,?,?,?)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>



