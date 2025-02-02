<?php 
    $arr = "This is string function. this is string function";

    echo strlen($arr);
    echo "<br>";
    
    echo str_word_count($arr);
    echo "<br>";

    echo substr_count($arr,"s"); // it will count all the string which contain "s" character.
    echo "<br>";


?>