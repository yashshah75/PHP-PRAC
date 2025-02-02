<?php 
    function life($pap, $punya)
    {
        if($pap == 0)
        {
            throw new Exception("division by GOD");
        }
        return $pap/$punya;
    }

    try{
        echo life(10,5)."<br>";
    }

    catch(Exception $e)
    {
        echo "Pap Vadhi Gya Che"."<br>";
    }

    finally{
        echo "uper avo"."<br>";
    }



?>