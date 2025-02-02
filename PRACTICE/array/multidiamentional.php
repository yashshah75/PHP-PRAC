<?php 
    $arr = [
        [1, "Yash", 21, 1234567890],
        [1, "Yash", 21, 1234567890],
        [1, "Yash", 21, 1234567890]
    ];


    // WITH FOR LOOP

    // for($row = 0; $row<=2; $row++)
    // {
    //     for($col=0; $col<4; $col++)
    //     {
    //         echo $arr[$row][$col]." | ";  
    //     }
    //     echo "<br>";
    // } 

    // WITH FOREACH LOOP 

    foreach($arr as $arr1)
    {
        foreach($arr1 as $arr2)
        {
            echo " | ";
            echo $arr2;
        }
        echo "<br>";  
    }

?>