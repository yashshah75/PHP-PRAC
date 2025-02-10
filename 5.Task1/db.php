<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

          if (!$conn) 
          {
            die("Connection failed: " . mysqli_connect_error());
          }
        
          mysqli_set_charset($conn, "utf8mb4");
          // if ($_SERVER["REQUEST_METHOD"] == "POST") {        
          // $username = $_POST['username'];
          // $email = $_POST['email'];
          // $password = $_POST['password'];
          // $cpassword = $_POST['confirm_password'];
          // $phone = $_POST['phone'];
          // }
          // $sql = "INSERT INTO `register` VALUES ('','$username', '$email', '$password', '$cpassword', '$phone', current_timestamp())";
          // $result = mysqli_query($conn, $sql);
          
          // if($result)
          // {
          //   echo "Successfully Inserted !!";
          // }
          // else{
          //   echo "Insertion faild";
          // }



//           <?php
// $servername = "localhost";
// $username = "root";  // Change as per your MySQL credentials
// $password = "";      // Change if necessary
// $dbname = "project";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Set charset

        
      ?>