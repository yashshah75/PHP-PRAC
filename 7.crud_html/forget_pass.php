<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forget_pwd_css.css">
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your email to reset your password</p>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="&nbsp;Enter your email" required>
            <button type="submit" name="pwd_reset">Reset Password</button>
        </form>
        <a href="login.php" class="back">Back to Login</a>
    </div>
</body>
</html>



<?php 
    $email = $_POST['email'];

    $token = bin2hex(random_bytes(16));

    $token_hash =  hash("sha256", $token);

    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

    $include = include('db.php');

    $sql = "UPDATE"


?>
