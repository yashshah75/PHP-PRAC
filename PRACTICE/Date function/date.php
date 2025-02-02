<?php 
    // $t = date("h:i:s");
    date_default_timezone_set("Asia/Kolkata");
    $t = date("H:i:s"); // Outputs the current date and time in IST
    echo "<p> The hour is : ".$t;

    if($t <= 12)
    {
        echo "Good Morning";
    }
    elseif($t>12 && $t<=17)
    {
        echo "Good Afternoon";
    }
    else{
        "Good Night";
    }
       
  



?>