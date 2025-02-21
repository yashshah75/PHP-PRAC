<?php

session_start();

$_SESSION["username"] = "Yash";

echo $_SESSION["username"];

// session_unset();

echo $_SESSION["username"];
?>