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
            <!-- <input type="file" name="upload_file" id="" required> -->
            <input type="file" id="imageInput" name="upload_file" accept=".jpg, .jpeg, .png" required>
            <span class="span"> Only JPG, JPEG, and PNG files are allowed</span>

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

             already have an account ? <a href="login.php" style="border-decoration:none">login</a>
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
    
    $allowed_extensions = ['jpg', 'jpeg', 'png'];

    // Get the file name and extension
    $filename = $_FILES["upload_file"]["name"];
    $temp_name = $_FILES["upload_file"]["tmp_name"];
    $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); // Extract extension

    // Validate file extension
    if (!in_array($file_ext, $allowed_extensions)) {
        echo "<p style='color:red;'>Only JPG, JPEG, and PNG files are allowed.</p>";
    } else {
        // Move the file if valid
        $folder = "images/" . $filename;
        if (!move_uploaded_file($temp_name, $folder)) {
            echo "<p style='color:red;'>File ~upload failed!</p>";  
        }
    }
    

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

    $check_username = "SELECT * FROM register WHERE username = ?";

    $stmt = $conn->prepare($check_username);
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Username already registered!");
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

