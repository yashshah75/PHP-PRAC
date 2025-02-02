<?php 

function life($pap, $karmo)
{
    if($karmo == 0)
    {
        throw new Exception("Division by zero");

    }
    echo $pap / $karmo;
}

try{
    echo life(10,0);
}

catch(Exception $e)
{
    echo "PAP Vadhi gaya che";
}

?>