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
    
      <form id="registrationForm" action="#" method="POST" autocomplete = "off">
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
        <input type="submit" value="Login" name="login" class="loginbtn">
    

        <br>
            New Member? <br> <a href="register.php">Register</a>
        
        
      </form>
  </div>
</body>
</html>


<?php 
  include("db.php");

  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    // $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE username = '$username' && password = '$password'";
    
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;

    if($total == 1)
    {
        $_SESSION['user_name'] = $username;
        header('location:index.php');     // or else you can use html redirect meta tag
    }
    else{
      echo "login failed";
    }
  }


?>
