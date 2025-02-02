<?php 

    $date = getdate();
        echo "Current Month is: ".$date['month']." - ".$date['year']; 
        echo "<br>"."======================================================================================";
    
    echo"<pre>";
        print_r(getdate());
    echo"</pre>";

?>