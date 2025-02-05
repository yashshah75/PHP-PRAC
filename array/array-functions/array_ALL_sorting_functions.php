<?php 

    echo "======================================================================================================"."<br>";
    echo "1. sort() : used to sort ascending order"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array("White","Black","Green","Yellow","Blue");
    sort($colors);
    print_r($colors);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "======================================================================================================"."<br>";
    echo "2. rsort() : used to sort descending order"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array("White","Black","Green","Yellow","Blue");
    rsort($colors);
    print_r($colors);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "======================================================================================================"."<br>";
    echo "3. asort() : used to sort ascending order in ". "<b>"."ASSOCIATIVE ARRAY". "</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array(
        "color 1" => "White",
        "color 2" => "Black",
        "color 3" => "Green",
        "color 4" => "Yellow",
        "color 5" => "Blue"
    );
    
    asort($colors);
    print_r($colors);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    
    echo "======================================================================================================"."<br>";
    echo "4. arsort() : used to sort in descending order in ". "<b>"."ASSOCIATIVE ARRAY"."</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array(
        "color 1" => "White",
        "color 2" => "Black",
        "color 3" => "Green",
        "color 4" => "Yellow",
        "color 5" => "Blue"
    );
    
    arsort($colors);
    print_r($colors);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "======================================================================================================"."<br>";
    echo "5. ksort() : used to sort in asscending order from keys in ". "<b>"."ASSOCIATIVE ARRAY"."</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array(
        "color 2" => "White",
        "color 1" => "Black",
        "color 4" => "Green",
        "color 5" => "Yellow",
        "color 3" => "Blue"
    );
    
    ksort($colors);
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    // echo "<br>";


    echo "======================================================================================================"."<br>";
    echo "6. krsort() : used to sort in descending order from keys in ". "<b>"."ASSOCIATIVE ARRAY"."</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array(
        "color 2" => "White",
        "color 1" => "Black",
        "color 4" => "Green",
        "color 5" => "Yellow",
        "color 3" => "Blue"
    );
    
    krsort($colors);
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    

    echo "======================================================================================================"."<br>";
    echo "7. natsort() : it means natural order sort,  used to sort in asscending order from keys in ". "<b>"."INDEXED ARRAY"."</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array("yash1","yash3","yash5","yash4","yash2");
    
    natsort($colors);
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    // echo "<br>";


    echo "============================================================================================================================================================="."<br>";
    echo "8. natcasesort() : it means natural case order sort, it is case sensitive which will take small alphabets first then take the capital alphabets, used to sort in asscending order from keys in ". "<b>"."INDEXED ARRAY"."</b>"."<br>";
    echo "============================================================================================================================================================="."<br>";
    
    $colors = array("yash1","yash3","yash5","yash4","yash2");
    
    natsort($colors);
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    // echo "<br>";


    echo "======================================================================================================"."<br>";
    echo "9. array_reverse() : used to sort in reverse order from array in ". "<b>"."INDEXED ARRAY"."</b>"."<br>";
    echo "======================================================================================================"."<br>";
    
    $colors = array("1","2","3","4","5");
    
    $arr_rev = array_reverse($colors);
    echo "<pre>";
    print_r($arr_rev);
    echo "</pre>";
    echo "<br>";
    // echo "<br>";
    
    // echo "<br>";
?>