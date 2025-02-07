

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>
    <form id="registrationForm" action="/submit" method="POST">
      <!-- Full Name -->
      <label for="fullName">Username:</label>
      <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required minlength="2">
      
      <!-- Email -->
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <!-- Password -->
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="5">
      
      <!-- Confirm Password -->
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password"  required>
      
      <!-- Phone Number -->
      <label for="phone">Phone Number:</label>
      <input type="tel" class="phone" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">

      <br>
      
      <!-- Submit Button -->
       <a href="http://login.php">
      <button type="submit">Register</button></a>
      
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