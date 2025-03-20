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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="POST">
        <?php 
            error_reporting(0); 
            
            $nameError = "";
            $name = "";

            if ($_SERVER['REQUEST_METHOD'] == "POST") {    
                if (!preg_match("/^[a-zA-Z]*$/", $_POST['Name'])) {
                    $nameError = "Name only contains alphabets and whitespace<br>";
                } else {
                    $name = $_POST['Name']; 
                }
            }
            ?>

        
        Name: <input type="text" name="Name" placeholder ="Enter Your Name" required> 
        <span style="color:red;"><?php echo $nameError;  ?> </span>
        <br><br>
        
        
        email: <input type="email" name="email" placeholder="Enter Your Email" required>
        <br><br>

        Phone: <input type="text" name="mobile" placeholder ="Enter Your Mobile Number" value="+91 "  required>
        <br><br>
        
        Gender: <input type="radio" name="gender" Value="Male"> Male
            <input type="radio" name="gender" Value="Female"> Female
            <input type="radio" name="gender" Value="other"> Other
        <br><br>

        Hobby: <input type="checkbox" name="hobby[]" value="Vollyball" id="">Vollyball
               <input type="checkbox" name="hobby[]" value="Cricket" id="">Cricket
               <input type="checkbox" name="hobby[]" value = "Football" id="">Football
        <br><br>
         
        <button type="submit" class="btn btn-primary submitbtn" value="submit">Submit</button>  

    </form>

<?php 
        error_reporting(0);
    

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //NameError
            if (isset($_POST['Name'])) {
                echo "Name: " . htmlspecialchars($_POST['Name']) . "<br>";
            }

            if (isset($_POST['email'])) {
                echo "email: " .  htmlspecialchars($_POST['email']) . "<br>";
            }
            
            $mobileno = $_POST ["mobile"];  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ){  
                $ErrMsg = "Only numeric value is allowed."."<br>";  
                echo $ErrMsg;  
            }

            $mobileno = strlen ($_POST ["mobile"]);  
            $length = strlen ($mobileno);  
              
            if($length < 10 && $length > 10) {  
                $ErrMsg = "Mobile must have 10 digits."."<br>";  
                        echo $ErrMsg;  
            }
             
            if (isset($_POST['gender'])) {
                echo "gender: " . htmlspecialchars($_POST['gender'])."<br>";
            }
            
            if(isset($_POST['hobby'])) {
                $hobbies = $_POST['hobby'];
                echo "Hobbies: " .  htmlspecialchars(implode(",", $hobbies))."<br>";//implode is used to combine array element into single String 
            }
            else 
            {
                echo "Hobbies: No hobbies selected <br>";
            }   
        }


?>


