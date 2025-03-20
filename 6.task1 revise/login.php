


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Log in</h2>
    <form id="registrationForm" action="/submit" method="POST">
      <!-- Full Name -->
      <label for="fullName">Username Or Email:</label>
      <input type="text" id="fullName" name="fullName" placeholder="Enter your User name or Email" required minlength="2">
      
      <!-- Password -->
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="5">
      
      <!-- Confirm Password -->
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirm_password" placeholder="Re-enter your password"  required>

      <br>
      
      <!-- Submit Button -->
      <button class="button">
            <a href="./welcome.php"> Log in </a>
      </button>

    </form>
  </div>
</body>
</html>
