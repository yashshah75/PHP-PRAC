
<?php 
  include "db.php";

  if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $phone = $_POST['phone'];

        $sql = "insert into register (username, email, password, confirmPassword, phone) VALUES (?,?,?,?,?)";

        
        echo $username." ".$email." ".$password." ".$confirmPassword." ".$phone;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form method="POST" action="register.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your full name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" required>

            <!-- <button type="submit">REGISTER</button> -->
             <input type="submit" name = "submit"> </input>
            <button type="button" onclick="window.location.href='login.php'">LOG IN</button>
        </form>
    </div>
</body>
</html>
