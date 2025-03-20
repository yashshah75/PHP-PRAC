<?php 
     
$date = date_create("2025-05-15");

date_modify($date, "10 Days");

echo date_format($date, "d-m-y");

?>