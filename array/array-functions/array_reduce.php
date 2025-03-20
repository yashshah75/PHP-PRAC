<?php 

function arrayreduce($n, $m)
{
    return $n + $m;
}
// $arr1 = array("Yash","shah");

// $array_reduce = array_reduce($arr1, "arrayreduce","Shah");

// print_r($array_reduce);

echo "<br>";
$arr2 = array(1,2,3,4,5);
$arrreduce = array_reduce($arr2,"arrayreduce",0);

print_r($arrreduce);
?>