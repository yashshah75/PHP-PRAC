<?php
session_start();
include("db.php");



// $token = $_GET['token'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];
    
    $token = $_GET['token'];
    if (!isset($_GET['token'])) {
        die("Invalid or missing token!");
    }

    // Basic validation
    if ($new_password !== $confirm_password) {
        echo "<p style='color:red;'> Passwords do not match!</p>";
    } elseif (strlen($new_password) < 3) {
        echo "<p style='color:red;'> Password must be at least 5 characters long.</p>";
    } else {
        
        // Encrypt the new password
        $hashedpassword = password_hash($new_password, PASSWORD_BCRYPT);
        $hashed_cpassword = password_hash($hashed_cpassword, PASSWORD_BCRYPT);
        
        $query = "UPDATE register SET password=?, confirmPassword=?, reset_token=NULL WHERE reset_token=?";
        $stmt = mysqli_prepare($conn, $query);
       
        if (!$stmt)
        {
            die("Query preparation failed: " . mysqli_error($conn));
        }
             mysqli_stmt_bind_param($stmt, "sss", $hashedpassword , $hashed_cpassword , $token);
             mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Redirect to login page with a success flag
            header("Location: login.php?reset=success");
            exit();
        } else {
            echo "<p> Invalid or expired token!</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <form method="POST">
        <h2>Reset Password</h2>
        <label>New Password:</label>
        <input type="text" name="password" required><br><br>

        <label>Confirm Password:</label>
        <input type="text" name="confirmPassword" required><br><br>

        <button type="submit" name="submit">Reset Password</button>
    </form>
</body>
</html>