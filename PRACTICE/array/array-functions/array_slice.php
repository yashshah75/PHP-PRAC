<?php 
    echo "Array splice";
    echo "<br>";

    $a1 = array("Yash","shah","Saumy");
    // $a1 = array("ekta","viral","jyoti");

    $array_splice = array_splice($a1,0,2);
    print_r($array_splice);

?>