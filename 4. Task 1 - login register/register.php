
<?php 
        
        // Initialize variables
        $nameError = "";
        $name = "";
        $emailError="";
        $numError="";

// Form submission on server
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            
// Name validation
            if (!preg_match("/^[a-zA-Z\s]*$/", $_POST['username'])) // ^[a-zA-Z\s]*$ allows only alphabets and whitespace
            {  
                $nameError = "Name can only contain alphabets and whitespace.";
            } 
            else 
            {
                $name = $_POST['username'];  // Save the valid name to echo it back into the input field
            }

//MOBILE NUMBER VALIDATION

            $mobileno = $_POST ["phone"];  
            // $pattern = '/^\+?[1-9]\d{1,14}$/';
            // $pattern = "/^\+?[1-9]\d{0,3}\s?\d{10}$/";

            if (!is_numeric($mobileno) || strlen($mobileno) != 13 || strlen($mobileno) > 13) 
            {
                $numError = "Invalid mobile number. It must be exactly 10 digits";
            } 

//EMAIL VALIDATION
 
                    $email = $_POST['email'];

                    // Validate the email1447
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        $emailError = "Please enter a valid email address.";
                    }
        }
    
        
    ?>



<?php 
    error_reporting(0);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Display form data
       
        if (isset($_POST['Name'])) {
            echo "Name: " . htmlspecialchars($_POST['Name']) . "<br>";
        }

        if(!($emailError))
        {
            echo"Email: ". htmlspecialchars($_POST['email']) . "<br>";
        }

        if(!($numError))
        {
            echo "Mobile: " . htmlspecialchars($_POST['mobile']) . "<br>";
        }

        if (isset($_POST['gender'])) {
            echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
        }

        if (isset($_POST['hobby'])) {
            $hobbies = $_POST['hobby'];
            echo "Hobbies: " . htmlspecialchars(implode(", ", $hobbies)) . "<br>"; //implode is used to combine array elements into a single string 
        } else {
            echo "Hobbies: No hobbies selected <br>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="form-container">
  
  <h2>Register</h2>
  
    <form id="registrationForm" method="POST">
      <!-- Full Name -->
      <label for="fullName">Username:</label>
      <input type="text" id="fullName" name="username" placeholder="Enter your full name" required minlength="2">
      
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
      <label for="phone">Phone Number: </label>
      <input type="tel" class="phone" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">

      <br>
      
      <!-- Submit Button -->
      <button class="button"><a href="http://localhost/1.%20AORC%20TECHNOLOGIES/PRACTICE/4.%20Task%201%20-%20login%20register/login.php"> REGISTER </a></button><br>
      <button class="button"><a href="http://localhost/1.%20AORC%20TECHNOLOGIES/PRACTICE/4.%20Task%201%20-%20login%20register/login.php"> LOG IN </a></button>
      
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