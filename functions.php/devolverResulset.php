<?php
    function devolverResulset($conection,$sql){
        $c=$conection;
        $resulset= mysqli_query($c,$sql);
        return $resulset;
    }

?>