<?php 
  session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="login-style.css">
</head>
<body>
  <div class="form-container">
    
    <h2>Log in</h2>
    
      <form id="registrationForm" action="" method="POST" autocomplete = "off">
        <!-- Full Name -->
        <label for="Username">Username Or Email:</label>
        <input type="text" id="username" name="username" placeholder="Enter your User name or Email" required minlength="2">
        
        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="3">

        <!-- <label for="forgetpassword">Password:</label> -->
        <br>
          <a href="forget_pass.php">Forget Password?</a>
        <br>
        
        <!-- Submit Button -->
         <!-- <a href="index.php"> -->
        <input type="submit" value="Login" name="login" class="loginbtn">
        <!-- </a> -->

        <br>
            New Member? <br> <a href="register.php">Register</a>
        
        
      </form>
  </div>
</body>
</html>


<?php 
// session_start();
include("db.php"); // include database connection

if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = "SELECT password FROM register WHERE username = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  
  if ($row = mysqli_fetch_assoc($result)) {
      $stored_hashed_password = $row['password'];
      if (password_verify($password, $stored_hashed_password)) {
          echo "Login successful!";
          session_start();
          $_SESSION['user_name'] = $username;
          header("Location: index.php"); // Redirect after successful login
          exit();
      } else {
          echo "Incorrect password!";
      }
  } else {
      echo "User not found!";
  }
}
  
    // mysqli_stmt_close($check);

//     $stmt = mysqli_prepare($conn, $query);
//     echo $stmts;
//     exit();
//     echo $stmt;
//     exit();
//     mysqli_stmt_bind_param($stmt, "s", $username);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($result)) {
//         if (password_verify($password, $row['password'])) {
//             // session_start();
//             $_SESSION['user_name'] = $username;
//             header('location:index.php'); // Redirect on success
            
//         } else {
//             echo "Invalid username or password";
//         }
//     } else {
//         echo "Invalid username or password";
//     }
// }


// ========================================================================================    
//      Use prepared statements to prevent SQL injection
//     $query = "SELECT * FROM register WHERE username = $username";
//     $check = mysqli_query($conn, $query);
//     $result = mysqli_fetch_assoc($check);
//     $uname = $result['username'];
//     $upass = $result['password'];

//     if (mysqli_num_rows($check) > 0) 
//     {
//         // Verify the password using password_verify()
//         if (password_verify($password, $upass)) {
//           echo "Username and Password are correct";
//           $_SESSION['user_name'] = $username;
//           header('location:index.php'); // Redirect to homepage
//           // exit();
//         } 
//         else 
//         {
//           echo "Incorrect Username or Password";
//         }
//     }
// }
// ?>

    
    <!-- // if($total == 1)
    // {
    //     $_SESSION['user_name'] = $username;
    //     header('location:index.php');     // or else you can use html redirect meta tag
    // }
    // else{
    //   echo "login failed";
    // } -->
  


