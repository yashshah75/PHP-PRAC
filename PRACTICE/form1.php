<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Practice</title>
</head>
<body>     
    <form action="" method="POST">

        Full Name :<input type="text" name = "fname" required>
        <br>
        <br>
        
        Email: <input type="email" name = "email">
        <br>
        <br>
        
        Gender : <input type="radio" name="gender" value ="male">Male
        <input type="radio" name="gender" value = "female">Female
        <input type="radio" name="gender" value = "other">other
        <br>
        <br>
        
        Hobby: <input type="checkbox" name="hobby[]" Value="Cricket"> Cricket
               <input type="checkbox" name="hobby[]" Value="VollyBall"> VollyBall
               <input type="checkbox" name="hobby[]" Value="FootBall"> FootBall

        <br>
        <br>
        <input type="submit" value="submit">    
    
    </form>
    
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {   
            echo "Name : ".$_POST['fname']."<br>";
            echo "email : ".$_POST['email']."<br>";
            echo "gender : ".$_POST['gender']."<br>";
        
        
            if (isset($_POST['hobby'])) {
                $hobbies = $_POST['hobby'];
                echo "Hobbies: " . implode(",", $hobbies) . "<br>";
            } 
            else 
            {
                echo "Hobbies: No hobbies selected <br>";
            }



// both codes are working

        // if(isset($_POST['hobby']))
        // {
        //     $hobbies = $_POST['hobby'];
        //     echo "You selected".implode(", ", $hobbies);        
        // }
        // else
        // {
        //     echo "No Hobbies Selected";
        // }
    }

    ?>


</body>
</html>          