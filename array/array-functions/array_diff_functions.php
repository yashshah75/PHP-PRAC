<?php 
    // 1. array_diff(var1, var2) : It will check the differece between key and value , It is not case sensitive 
   
    echo "===================================================================================================================="."<br>"; 
    echo "1. array_diff(var1, var2) : It will check the differece between key and value and print the different keys and values, It is not case sensitive "."<br>";
    echo "<br>";
   
    $arr1 = array("a"=>"Yash","B"=>"Kalp","c"=>"Anjali","d"=>"Ishan");
    $arr2 = array("a"=>"Yash","b"=>"Kalp","c"=>"Dharmik","d"=>"Sujal");
    $array_diff = array_diff($arr1,$arr2);
    print_r($array_diff);
    
    echo "<br>";
    echo "<br>";

    echo "===================================================================================================================="."<br>"; 


    //2. array_diff_key(var1, var2): it will return only different keys only
    echo "2. array_diff_key(var1, var2): it will return only different keys only"."<br>";
    echo "<br>";
    $arr3 = array("a"=>"red", "b"=>"blue","c"=>"green");
    $arr4 = array("a"=>"red", "b"=>"vadli", "d"=>"green");
    $array_diff_key = array_diff_key($arr3, $arr4);
    print_r($array_diff_key);
    
    echo "<br>";
    echo "<br>"."====================================================================================================================="."<br>";
    echo "<br>";


    //2. array_diff_key(var1, var2): it will return only different keys only
    echo "2. array_diff_key(var1, var2): it will return only different keys only"."<br>";
    echo "<br>";
    $arr3 = array("a"=>"red", "b"=>"blue","c"=>"green");
    $arr4 = array("a"=>"red", "b"=>"vadli", "d"=>"green");
    $array_diff_key = array_diff_key($arr3, $arr4);
    print_r($array_diff_key);
    
    echo "<br>";
    echo "<br>"."====================================================================================================================="."<br>";
    echo "<br>";


    //3. array_udiff(var1, var2): it will return only different value only
    echo "3. array_udiff(var1, var2): it will return only different value only"."<br>";
    echo "<br>";
    function compare($arr5, $arr6)
    {
        if($arr5 === $arr6)
        {
            return 0;
        }

           return ($arr5 > $arr6) ? 1 : -1;
    }
    $arr5 = array("a"=>"red", "b"=>"blue","c"=>"green");
    $arr6 = array("a"=>"red", "b"=>"vadli", "d"=>"green");
    $array_udiff = array_udiff($arr5, $arr6,"compare");
    print_r($array_udiff);
    
    echo "<br>";
    echo "<br>"."====================================================================================================================="."<br>";
    echo "<br>";
    
    
    

    ?>