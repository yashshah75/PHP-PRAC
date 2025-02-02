<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //session['session_name'] = 'value';
        session_start();


        $timeout = 60; // 1 minutes

        // Check if the "last_activity" timestamp is set in the session
        if (isset($_SESSION['last_activity'])) {
            // Calculate the time elapsed since the last activity
            $elapsed_time = time() - $_SESSION['last_activity'];

            // If the elapsed time exceeds the timeout limit, destroy the session
            if ($elapsed_time > $timeout) {
                session_unset(); // Unset all session variables
                session_destroy(); // Destroy the session
                echo "<h1 style='color: red'>"."Your session has expired. Please refresh the page to start a new session.";
                exit(); // Stop further script execution
            }
        }
        $_SESSION['last_activity'] = time();
    
        $_SESSION['name'] = "Yash";
       $_SESSION['Degree'] = "MCA";

        if($_SESSION['name'] && $_SESSION['Degree'])
        {
            echo "Session is set in this page"."<br>";
            echo "User: ".$_SESSION['name']."<br>";
            echo "Value: ".$_SESSION['Degree']."<br>";
        }
    ?>
</body>
</html>

