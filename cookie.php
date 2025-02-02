    <?php 
        $cookie_name = "USERNAME";
        $cookie_value = "Yash";

        setcookie($cookie_name, $cookie_value, time() + 3600); //3600 means current time + 1 hour
        
        if(isset($_COOKIE[$cookie_name]))
            {
                echo "cookie is set : ". $_COOKIE[$cookie_name];
            }
            else{

                echo "cookie is not set";
            }
        ?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
   
</body>
</html>

