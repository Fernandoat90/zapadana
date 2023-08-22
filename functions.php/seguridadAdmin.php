<?php
    session_start();
    if(isset($_SESSION["rol"])){

    }
    else{
        header("location:../functions.php/logout.php");
    }
?>