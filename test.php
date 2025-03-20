<?php 

    session_start();

    echo $_SESSION['username'];
    // $_SESSION['class'] = "BCA";
    echo $_SESSION['class'];

    session_destroy();
?>