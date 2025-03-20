<?php 
    $arr1 = array("Yash","Kalp","anjali","Fenil");
    $arr2 = array("Yash","Kalp","anjali");

    $array_chunk = array_chunk($arr1, 2);
    echo "<pre>";
    print_r($array_chunk);

?>