<?php 
    session_start();
    require_once('db.php'); // Include database connection
    //error_reporting(0); 
    $uid = $_GET['Id'];
   
    $user_profile = $_SESSION['user_name']; 

    if($user_profile == true)
    {
        // echo "Logged In";
    }
    else
    {
        header('location:login.php');
    }
    
    $query = "SELECT * FROM register where id='$uid'";
    $data = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($data);

?>

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
    
    <h2>UPDATE RECORD</h2>
    
        <form method="POST" enctype="multipart/form-data">     
   
        <!-- Display User Image -->

                <img src="<?php echo $result['User_image']; ?>" alt="Profile Image" width="100">

            <label for="User_image">Update Profile Image:</label>
            <input type="file" name="User_image" id="profile_image">
            
            <label for="username">Username:</label>
            <input type="text" value= "<?php echo $result['username']; ?>" id="username" name="username">

            <label for="email"> Email Address:</label>
            <input type="email" value= "<?php echo $result['email']; ?>" id="email" name="email">

            <label for="phone">Phone Number:</label>
            <input type="tel" value= "<?php echo $result['phone']; ?>" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" >

             <input type="submit" value="Update" class="btn" name="Update"> </input>

             
        </form>
    </div>
</body>
</html>

<?php 

    if(isset($_POST['Update']))
    {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);
        $phone = trim($_POST['phone']);
        $folder = $result['User_image'];
        // $profile_image = $result['User_image']; // Keep old image if new image is not uploaded
        
        if (!empty($_FILES['User_image']['name'])) {
            $filename = $_FILES['User_image']['name'];
            $tempname = $_FILES['User_image']['tmp_name'];
            $folder = "images/".$filename;
            
            if(!move_uploaded_file($tempname, $folder))
            {
                die("File Upload Failed");
            }
        }

        if(empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($phone)) {
            die("All fields are required!");
        }
    
        if ($password !== $confirmPassword) {
            die("Passwords do not match!");
        }

        if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{5,}$/', $password)) {
            
            die("Password is not in correct format");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format!");
        }
    
        // Password will be encrypted by using 
        // $hashed_password = password_hash($password, PASSWORD_BCRYPT); //BCRYPT is secure hashing method 
        // $hashed_cpass = password_hash($confirmPassword, PASSWORD_BCRYPT);

        $query = "UPDATE register SET User_image = '$folder', username='$username', email='$email', password='$hashed_password', confirmPassword='$hashed_cpass', phone='$phone' WHERE id='$uid'";

        $data = mysqli_query($conn,$query);
    
        if(!$data)
        {
            echo "Record not Updated";
        }
        else
        {   
            ?>

            <!-- Used to redirect on index.php page after 2 second -->
            <meta http-equiv = "refresh" content = "2; url = http://localhost/1.%20AORC%20TECHNOLOGIES/PRACTICE/7.crud_html/index.php" />
        
        <?php
            echo "";
            
            $message = "Record Updated Successfully!";
            echo "<div style='padding: 10px; background-color: green; color: white; text-align: center;'>$message</div>";
        }
       }

    
    ?>                                                                                                   


        