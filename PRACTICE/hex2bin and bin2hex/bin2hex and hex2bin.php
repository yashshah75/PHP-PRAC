<?php 

    $str = "Yash shah Here!!";
    echo "Normal String : ".$str;
    echo "<br>";
    echo "<br>";
    
    $bin2hex = bin2hex($str); 
    echo "binary to hexa String : ".$bin2hex;
    echo "<br>";
    echo "<br>";

    $hex2bin = hex2bin($bin2hex);
    echo "hexa to Binary String : ".$hex2bin;
    // echo "Normal String : ".$str;




?>