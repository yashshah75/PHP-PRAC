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


//     $query = "SELECT * FROM register WHERE id = '$id'";
// $data = mysqli_query($conn, $query);
// $result = mysqli_fetch_assoc($data);

// if (!$result) {
//     die("Error: No record found for ID $uid");
// }

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
    
        <form method="POST">     
           
            <label for="username">Username:</label>
            <input type="text" value= "<?php echo $result['username']; ?>" id="username" name="username">

            <label for="email">Email Address:</label>
            <input type="email" value= "<?php echo $result['email']; ?>" id="email" name="email">

            <label for="password">Password:</label>
            <input type="text" value= "<?php echo $result['password']; ?>"  id="password" name="password"  >

            <label for="confirmPassword">Confirm Password:</label>
            <input type="text" name= "confirmPassword" value= "<?php echo $result['confirmPassword']; ?>"  id="confirmPassword">

            <label for="phone">Phone Number:</label>
            <input type="tel" value= "<?php echo $result['phone']; ?>" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" >

            <!-- <button type="submit">REGISTER</button> -->
             <!-- <input type="submit" name = "submit" value="Update" class="btn"> </input> -->
             <input type="submit" value="Update" class="btn" name="Update"> </input>
            <!-- <button type="button" onclick="window.location.href='login.php'">LOG IN</button> -->
        </form>
    </div>
</body>
</html>

<?php 

    if(isset($_POST['Update']))
    {

        // error_reporting(0);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);
        $phone = trim($_POST['phone']);
        
        if(empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($phone)) {
            die("All fields are required!");
        }
    
        if ($password !== $confirmPassword) {
            die("Passwords do not match!");
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format!");
        }
    
        if (strlen($password) < 3) {
            die("Password must be at least 3 characters long and include an uppercase letter & a number.");
        }
        // Password will be encrypted by using 
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); //BCRYPT is secure hashing method 
        $hashed_cpass = password_hash($confirmPassword, PASSWORD_BCRYPT);

        $query = "UPDATE register SET username='$username', email='$email', password='$hashed_password', confirmPassword='$hashed_cpass', phone='$phone' WHERE id='$uid'";

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

            // header("location: index.php"); 
        }
       }

    
    ?>                                                                                                   


        