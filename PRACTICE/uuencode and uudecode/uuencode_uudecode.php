<?php 
    $str = "Hello, Yash shah Here!!";

    // convert_uuencode: Used to Encode Message or string 
    
    echo "==================================================================="."<br>"."<br>";
    echo "convert_uuencode: Used to Encode Message or string"."<br>"; 
    $encode = convert_uuencode($str);
    echo $encode;
    echo "<br>";
    echo "<br>";
    echo "<br>"."==================================================================="."<br>";
    echo "<br>";

    echo "<br>";
    // // convert_uudecode: Used to decode Message or string 
    echo "==================================================================="."<br>"."<br>";
    echo "convert_uudecode: Used to decode Message or string"."<br>";
    echo convert_uudecode($encode);
    echo "<br>"."<br>"."==================================================================="."<br>";


?>