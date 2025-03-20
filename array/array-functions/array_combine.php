<?php
    // array_combine is used to combine two array, it will make first variable as a key and second as a value

    $a1 = array("Yash","Kalp","Anjali");
    $a2 = array(1,2,3);

    $array_combine = array_combine($a1, $a2);
    print_r($array_combine);



?>