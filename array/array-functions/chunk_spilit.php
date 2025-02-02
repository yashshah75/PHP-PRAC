<?php 
    $str = "Hello this is chunk_split() function programe";

    $chunk = chunk_split($str,2,"..");

    print_r($chunk);


?>