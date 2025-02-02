<?php 
    $age = array("Name"=>"Yash", "Age"=>25, "address"=>"Ahmedabad");
    echo json_encode($age)."<br>";

    $cars = array("1" => "Volvo", "2"=> "BMW", "3" => "Audi");
    echo json_encode($cars)."<br>";

    $car = array("Volvo", "BMW", "Toyota");
    echo json_encode($car)."<br>";
?>