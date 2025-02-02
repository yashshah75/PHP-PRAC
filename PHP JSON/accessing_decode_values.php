<?php 
    // This example shows how to access the values from a PHP object:

    $obj = '{"Name":"Yash", "Age":22, "address":"Ahmedabad"}';
    
    $output = json_decode($obj);

    echo $output->Name."<br>";
    echo $output->address."<br>";
    //  echo $output->age;

// ===============================================================================================================

echo "==========================================================================================================="."<br>";
echo "get all array keys using array_keys function , which is buit-in function"."<br>"."<br>";

$obj1 = '{"Name": "Yash", "age":21, "City":"Ahmedabad"}';
$decode = json_decode($obj1,true);

$key = array_keys($decode);
echo $key[0]."<br>";
echo $key[1]."<br>";
echo $key[2]."<br>";
// var_dump($key);


// ===============================================================================================================

echo "==========================================================================================================="."<br>";
echo "get all array Values using array_values function , which is buit-in function"."<br>"."<br>";

$obj1 = '{"Name": "Yash", "age":21, "City":"Ahmedabad"}';
$decode = json_decode($obj1,true);

$value = array_values($decode);
echo $value[0]."<br>";
echo $value[1]."<br>";
echo $value[2]."<br>";
// var_dump($key);

// ===============================================================================================================

echo "==========================================================================================================="."<br>";

$jsonobj = '{"Name": "Yash", "age":22 ,"city":"ahmedabad"}';

$decode = json_decode($jsonobj);

foreach($decode as $key => $value)
{
   echo "Key is: ".$key."<br>"."value is:".$value."<br>"; 
}

?>


