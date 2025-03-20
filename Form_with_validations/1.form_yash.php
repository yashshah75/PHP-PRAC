</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<style>   
   form
    {
        text-align: center;
    }
</style>

<body>

<form action="" method="POST">
<br>

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
            if (!preg_match("/^[a-zA-Z\s]*$/", $_POST['Name'])) // ^[a-zA-Z\s]*$ allows only alphabets and whitespace
            {  
                $nameError = "Name can only contain alphabets and whitespace.";
            } 
            else 
            {
                $name = $_POST['Name'];  // Save the valid name to echo it back into the input field
            }

//MOBILE NUMBER VALIDATION

            $mobileno = $_POST ["mobile"];  
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
    
<!-- ================================================================================================================================================== -->

<!-- HTML FORM  -->

    <!-- Name Field -->
    Name: <input type="text" name="Name" placeholder="Enter Your Name" required>
    <span style="color:red;"><?php echo $nameError; ?></span>
    <br><br>

    <!-- Email Field -->
    email: <input type="email" name="email" placeholder="Enter Your Email" required>
    <span style="color:red;"> <?php echo $emailError; ?></span>
    <br><br>

    <!-- Mobile Field -->
    <!-- Phone: <input type="text" name="mobile" placeholder="Enter Your Mobile Number" value="+91 "  required> -->
    <!-- attribute : pattern="^\+?[1-9]\d{1,14}$"  -->
    Mobile Number : <input type="tel" name="mobile"  required placeholder="Enter Mobile Number" pattern="^\+?[1-9]\d{1,14}$">
    <span style="color:red;"> <?php echo $numError; ?></span>
    <br><br>
    

    <!-- Gender Field -->
    Gender: <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    <!-- Hobby Field -->
    Hobby: <input type="checkbox" name="hobby[]" value="Volleyball"> Volleyball
    <input type="checkbox" name="hobby[]" value="Cricket"> Cricket
    <input type="checkbox" name="hobby[]" value="Football"> Football
    <br><br>

    <button type="submit" class="btn btn-primary submitbtn" value="submit">Submit</button>  

</form>

<!-- ================================================================================================================================== -->
<center> <b>

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

</center>