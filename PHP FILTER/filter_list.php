<?php 
    // Get all available filters
    $filters = filter_list();
    
    // Display the filter list
    foreach ($filters as $id => $filterName) {
        echo "Filter ID: $id, Filter Name: $filterName<br>";
    }

    

?>