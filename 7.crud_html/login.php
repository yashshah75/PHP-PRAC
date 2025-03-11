    <?php 
      session_start();

      include("db.php"); // include database connection
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

    if(isset($_POST['login'])) {
      $username = $_POST['username'];
      // $email = $_POST['email'];
      $password = $_POST['password'];
      
      $query = "SELECT username, email, password FROM register WHERE username = ? OR email = ?";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt, "ss", $username, $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result( $stmt);
      
      if ($row = mysqli_fetch_assoc($result)) {
          $hashedpassword = $row['password'];
          if (password_verify($password, $hashedpassword)) {
              
              $_SESSION['user_name'] = $username;
              header("Location: index.php"); // Redirect after successful login
              exit();
          } else {
              echo "Incorrect password!";
          }
      } else {
          echo "User not found!";
      }

      // mysqli_stmt_close($stmt);
      // mysqli_close($conn);
    }
     ?>

  
      


