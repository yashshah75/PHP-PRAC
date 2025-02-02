<?php 

$arr1 = array("a"=>"red", "b"=>"yellow","B"=>"Yellow","b"=>"yellow"); 

$arr_unique = array_unique($arr1);

print_r($arr_unique);

echo "<br>";
echo "<br>";

$array_values = array_values($arr1);
print_r($array_values);

?>