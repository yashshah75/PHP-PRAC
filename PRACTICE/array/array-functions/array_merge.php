<?php 

// array_merge is used with index or associative array 

    echo "array_merge is used with index or associative array"."<br>";
    echo "========================================================================================="."<br>";

    $a1 = array("Yash","Kalp","Anjali");
    $a2 = array(1,2,3);

    $arr_merge = array_merge($a1, $a2);
    print_r($arr_merge);

?>