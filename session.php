<?php

session_start();

$_SESSION["user_name"] = "Yash";

echo $_SESSION["user_name"];

// session_unset();yashshah

// echo $_SESSION["user_name"];
?>