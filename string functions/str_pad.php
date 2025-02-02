<?php 

// 1. str_repeat: used to repeat string 




// 2. str_pad : used to give me padding into string 
    // types : 
        // 1. str_pad($str, 20, "symbol", STR_PAD_LEFT)
        // 2. str_pad($str, 20, "symbol", STR_PAD_RIGHT)
        // 3. str_pad($str, 20, "symbol", STR_PAD_BOTH)

    $str = "Yash";

    echo "==============================================="."<br>";
    echo ">>>>>>>>>>>>>>> STR_PAD_LEFT <<<<<<<<<<<<<<<"."<BR>";
    echo "==============================================="."<br>";
    echo str_pad($str, 10, ".", STR_PAD_LEFT);
    ECHO "<BR>";
    ECHO "<BR>";
     
    
    echo "==============================================="."<br>";
    echo ">>>>>>>>>>>>>>> STR_PAD_RIGHT <<<<<<<<<<<<<<<"."<BR>";
    echo "==============================================="."<br>";
    echo str_pad($str, 10, ".", STR_PAD_RIGHT);
    ECHO "<BR>";
    ECHO "<BR>";

    
    echo "==============================================="."<br>";
    echo ">>>>>>>>>>>>>>> STR_PAD_BOTH <<<<<<<<<<<<<<<"."<BR>";
    echo "==============================================="."<br>";
    echo str_pad($str, 10, ".", STR_PAD_BOTH);
    ECHO "<BR>";    
    ECHO "<BR>";    
?>