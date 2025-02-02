<?php 
echo "array_change_key_case : used to change the key case which means it will change the lower change into upper case and upper case into lower case"."<br>";

echo "==================================================================================================================="."<br>";

    $arr = array(
        "A" => "RED",
        "B" => "BLUE", 
        "C" => "GREEN", 
        "D" => "PURPLE",
        "E" => "SKYBLUE",         
    );

    $changekeycase1 = array_change_key_case($arr, CASE_UPPER);
   
    print_r($changekeycase1);

    ECHO "<br>";
    ECHO "<br>";


    $changekeycase = array_change_key_case($arr, CASE_LOWER);
   
    print_r($changekeycase);

?>