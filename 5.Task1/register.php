<?php 
error_reporting(0);
// include '/db.php';
include __DIR__ . "/../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm_password'];
  $phone = $_POST['phone'];

  // Validate password confirmation
  if ($password !== $confirmPassword) {
      die("Error: Passwords do not match!");
  }

  // Hash password for security
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);

  // Check if email already exists
  $check_email = "SELECT * FROM register WHERE email='$email'";
  $result = mysqli_query($conn, $check_email);

  if (mysqli_num_rows($result) > 0) {
      die("Error: Email already registered!");
  } else {
      // Insert new user
      $sql = "INSERT INTO register (username, email, password, confirm_password, phone) VALUES ('$username', '$email', '$hashed_password','$confirmPassword', '$phone')";
      
      if (mysqli_query($conn, $sql)) {
          echo "Registration successful!";
          header("Location: login.php");
          exit();
      } else {
          die("Error: " . mysqli_error($conn));
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="form-container">
  
  <h2>Register</h2>

<!-- ==============================  HTML FORM ========================= -->
   
<form id="registrationForm" action="./login"  method="POST">
      <!-- Full Name -->
      <label for="fullName">Username:</label>
      <input type="text" id="fullName" name="username" placeholder="Enter your full name" required minlength="2">
      
      <!-- Email -->
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <!-- Password -->
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="5">
      
      <!-- Confirm Password -->
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirm_password" placeholder="Re-enter your password"  required>
      
      <!-- Phone Number -->
      <label for="phone">Phone Number: </label>
      <input type="tel" class="phone" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">

      <br>
      
      <!-- Submit Button -->
      
      <!-- <button class="button"><a href="./login.php"> REGISTER </a></button><br> -->
      <button type="submit" name="submit">REGISTER</button> <br>  
      <button class="button"><a href="./login.php"> LOG IN </a></button>
      
      <!-- Gender
      <label>Gender:</label>
      <div class="gender">
        <label><input type="radio" name="gender" value="Male" required> Male</label>
        <label><input type="radio" name="gender" value="Female" required> Female</label>
      </div>
       -->

      <!-- Terms and Conditions
      <div class="terms">
        <label>
          <input type="checkbox" name="terms" required> I agree to the terms and conditions
        </label>
      </div>
       -->


    </form>
  </div>
</body>
</html>