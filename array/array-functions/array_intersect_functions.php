<?php 

    // 1. array_intersect(var1, var2) : It will check the key and value same or not, It is not case sensitive 
    echo "===================================================================================="."<br>"; 
    echo "1. array_intersect(var1, var2) : It will check the key and value same or not, It is not case sensitive"."<br>";
    echo "<br>";
    $arr1 = array("a"=>"Yash","b"=>"Kalp","c"=>"Anjali","d"=>"Ishan");
    $arr2 = array("a"=>"Yash","b"=>"Kalp","c"=>"Dharmik","d"=>"Sujal");
    $array_intersect = array_intersect($arr1,$arr2);
    print_r($array_intersect);
    echo "<br>";
    echo "<br>";
   
//===================================================================================================================== 
    // 2. array_intersect_key(var1, var2): it will check only samae key not the values , It is case-sensitive also
    echo "===================================================================================="."<br>";
    echo " 2. array_intersect_key(var1, var2): it will check only samae key not the values, It is case-sensitive also"."<br>";
    echo "<br>";
    
    $arr3 = array("a"=>"Harsh","b"=>"Om prakash","c"=>"Fenil");
    $arr4 = array("a"=>"Harsh","c"=>"Om prakash","d"=>"Fenil");

    $array_intersect_key = array_intersect_key($arr3, $arr4);
    print_r($array_intersect_key);


//===================================================================================================================== 
    // 3. array_intersect_assoc(var1, var2): return output if key & value both are same with user-defined function

    echo "<br>"."<br>"."===================================================================================="."<br>";
    echo "3. array_intersect_uassoc(var1, var2): return output if key & value both are same with user-defined function";
    echo "<br>";
    echo "<br>";
    
    function compare($a, $b)
    {
        if($a === $b)
        {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a = array("a"=>"red","b"=>"blue","c"=>"green");
    $b = array("a"=>"Yellow", "b"=>"blue", "c"=>"purple");
    $newarr = array_intersect_uassoc($a, $b, "compare");
    print_r($newarr);
    
?>