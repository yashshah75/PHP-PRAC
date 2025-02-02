<?php 

    $date1 = date_create("2025-01-31");
    $date2 = date_create("2025-02-31");

    $date_diff = date_diff($date1,$date2);
    print_r ("Difference of Days are : ".$date_diff -> days." Days");

?>