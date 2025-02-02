<?php 

$float = "123";

if (filter_var($float, FILTER_VALIDATE_FLOAT) && strpos($float,".")) 
{
    echo "Valid float!";
} else {
    echo "Invalid float!";
}


?>