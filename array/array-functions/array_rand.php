<?php 

    $arr = array("Yash","Kalp","Anjali");

    $arr_rand = array_rand($arr);

    // print_r($arr_rand);
    $arr1 = $arr[$arr_rand];
    print_r($arr1);
    
    echo "<br>"."============================================================================================="."<br>";
    
    shuffle($arr);
    print_r($arr);
?>