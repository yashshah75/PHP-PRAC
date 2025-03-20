<?php

session_start();
include("db.php");

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// OR include manually
// require 'src/PHPMailer.php';
// require 'src/SMTP.php';
// require 'src/Exception.php';


if (isset($_POST['pwd_reset'])) {
    $email = $_POST['email'];

    // Check if email exists
    $query = "SELECT * FROM register WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    
    if ($row = mysqli_fetch_assoc($result)) 
    {
        // Generate a unique token
         $token = bin2hex(random_bytes(20));

        // Store token in the database
        $updateQuery = "UPDATE register SET reset_token=? WHERE email=?";  
        $stmt = mysqli_prepare($conn, $updateQuery);
        
        if (!$stmt) 
            die("Update query preparation failed: " . mysqli_error($conn));
        {
        }
          
       // $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, "ss", $token, $email);
        mysqli_stmt_execute($stmt);

        // Send reset link to user's email
        $reset_link = "http://localhost/1. AORC TECHNOLOGIES/PRACTICE/7.crud_html/reset_password.php?token=$token";

        $mail = new PHPMailer(true);
        try 
        {
            // Server settings
            $mail->isSMTP();                                  
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                       
            $mail->Username = 'yashphp.aorc@gmail.com';    
            $mail->Password = 'lzsfzuncktimswwm';      
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;                           

            // Recipients
            $mail->setFrom('yashphp.aorc@gmail.com', 'PHPmailer');
            $mail->addAddress($email);                  

            // Content
            $mail->isHTML(true);                         
            $mail->Subject = 'Password Reset Request';
            $mail->Body    = "Click the link below to reset your password: <a href='$reset_link'>$reset_link</a>";

            // Send the email
            $mail->send();
            echo "Password reset link has been sent to your email.";
        } 
        catch (Exception $e) 
        {
            echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
        }
    } 
    else 
    {
        echo "Email not found!";
    }
}
?>

hello

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

