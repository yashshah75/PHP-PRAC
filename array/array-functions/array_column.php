<?php 
    $arr1 = array(
    array(
        "a" => "Red",
        "b" => "Blue",
        "c" => "Green",
      ),

    array(
        "a" => "white",
        "b" => "Blue",
        "c" => "Green",
    ),
    
    array(
        "a" => "Yellow",
        "b" => "Blue",
        "c" => "Green",
    ),
);

    $array_column = array_column($arr1,"a");
    print_r($array_column);



?>