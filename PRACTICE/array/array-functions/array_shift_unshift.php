<?php 
    $shift = array(1,2,3,4,5);
    array_shift($shift);

    echo "<pre>";
    print_r($shift); // Remove Value from the first 
    echo "<pre>";

    $unshift = array(1,2,3,4,5);
    array_unshift($unshift,0);
    print_r($unshift); // Add Value from the first
?>