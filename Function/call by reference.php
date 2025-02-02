<?php 
    function testing(&$string)
    {
        $string .= " Shah";
        // return $string;
    }
    $st = "Yash";
    testing($st);
    echo $st;

?>