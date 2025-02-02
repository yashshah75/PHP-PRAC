<?php 
     $a = 10;
     $b = 20;

    function sum()
    {
        global $a, $b, $c;
        $c = $a + $b;   
    }
    sum();
    echo $c; 
?>