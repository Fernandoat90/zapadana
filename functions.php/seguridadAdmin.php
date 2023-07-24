<?php
    session_start();
    if(isset($_SESSION["rol"])){
        // if($_SESSION["rol"]==1){

        // }
        // else{
        //     header("location:../functions.php/logout.php");
        // }

    }
    else{
        header("location:../functions.php/logout.php");
    }
?>