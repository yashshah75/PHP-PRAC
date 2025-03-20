<?php 

// array_flip() function is used to flip the values to key and key to value it means values become keys and keys become value
echo "array_flip() function is used to flip the values to key and key to value it means values become keys and keys become value"."<br>";
echo "====================================================================================================="."<br>";    
$arr = array(
        "a" => "red",
        "b" => "blue",
        "c" => "green",
        "d" => "yellow",
    );
                    
    $flip = array_flip($arr);
    print_r($flip);



?>