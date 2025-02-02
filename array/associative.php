<?php 

// YOU CAN DECLARE WITH SQUARE BRACKETS 
    $age = [ 
        "Yash" => 21,
        "Saumy" => 31,
        "Dhruman" => 41
    ];

    echo "Age of Yash is: ".$age['Yash']."<br>";
    echo "Age of Saumy is: ".$age['Saumy']."<br>";
    echo "Age of Dhruman is: ".$age['Dhruman']."<br>";

    // YOU CAN DECLARE WITH "ROUND BRACKETS" AND "ARRAY" KEYWORD

    $age1 = array(
        "Name" => "Yash",
        "Age" => 21,
        "Gender" => "Male"
    );

    echo "Name of Yash is :".$age1['Name']."<br>";
    echo "age of Yash is :".$age1['Age']."<br>";
    echo "Gender of Yash is :".$age1['Gender']."<br>";
?>