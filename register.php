
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reg-style.css">
</head>
<body>
    <div class="form-container">                                                                                 
        <h2>Register</h2>
        <form method="POST" action="" enctype = "multipart/form-data">     

            <label for="File">Your Photo:</label>
            <input type="file" name="upload_file" id="" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your full name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password must be at least 5 characters long" required>
            <span class="span"> Password should be in this format: Abc@123</span>
            <span class="span"> Password must be at least 5 characters long</span>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Mobile Number Should be 10 Digits" required>

            <!-- <button type="submit">REGISTER</button> -->
             <input type="submit" name = "submit" value="submit" class="btn"> </input>
            <!-- <button type="button" onclick="window.location.href='login.php'">LOG IN</button> -->

            
        </form>
    </div>
</body>
</html>

<!-- ================================================ PHP CODE FOR FETCH DATABASE & Validations ============================================== -->

<?php 
require_once('db.php'); // Include database connection

if(isset($_POST['submit']))
{
    
    //for upload the file

    $filename =  $_FILES["upload_file"]["name"];
    $temp_name = $_FILES["upload_file"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($temp_name, $folder);

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $phone = trim($_POST['phone']);

    if ($password !== $confirmPassword) {
        die("Passwords do not match!");
    }

    if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{5,}$/', $password)) {
            
        die("Password is not in correct format");
    }
    
    // if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=(?:.*[\W_]){1})(?!.*[\W_]{2,}).{5,}$/', $password)) {
    //     echo "Password must be at least 5 characters long, contain at least one uppercase letter, one number, and one special character. <br>";
    // } 


    // if (strlen($password) < 3) {
    //     echo "Password must be at least 5 characters long.<br>";
    // }
    // if (!preg_match('/[A-Z]/', $password)) {
    //     echo "Password must contain at least one uppercase letter.<br>";
    // }
    // if (!preg_match('/\d/', $password)) {
    //     echo "Password must contain at least one number.<br>";
    // }
    // if (!preg_match('/[\W_]/', $password)) {
    //     echo "Password must contain at least one special character.<br>";
    // }

    // if (strlen($password) < 3) {
    //     die("Password must be at least 3 characters long and include an uppercase letter & a number.");
    // }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }
     
    // password_hash() function is used to encrypt the password it means it  
    $hashed_password = password_hash($password, PASSWORD_BCRYPT); //BCRYPT is secure hashing method 
    $hashed_cpass = password_hash($confirmPassword, PASSWORD_BCRYPT);
    // Check if email already exists
    $check_email = "SELECT * FROM register WHERE email = ?";
    
    $stmt = $conn->prepare($check_email); // The prepare() function is used to create a SQL statement template before executing it.
                                          // This helps prevent SQL injection attacks.
                                          // It allows binding of parameters dynamically, making queries more efficient and secure.
    
    $stmt->bind_param("s", $email); //bind_param
    $stmt->execute();
    $stmt->store_result();                                   

    if ($stmt->num_rows > 0) {
        die("Email already registered!");
    }
    $stmt->close();

    // Insert user into the database
    $sql = "INSERT INTO register (User_image, username, email, password, confirmPassword, phone) VALUES (?,?, ?, ?, ?, ?)";
    $stmtinsert = $conn->prepare($sql);

    $stmtinsert->bind_param("ssssss", $folder, $username, $email, $hashed_password, $hashed_cpass, $phone);    // bind_param() : bind_param() is a function in PHP used with MySQLi prepared statements
    
    // to bind actual values to placeholders (?) in an SQL query
    
    if ($stmtinsert->execute()) {
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmtinsert->close(); //closing the statement after the execution
    $conn->close(); // closing the database
}
?>
