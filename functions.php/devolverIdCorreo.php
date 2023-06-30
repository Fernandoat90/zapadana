<?php
    function  devolverIdCorreo($c,$mail){
        $c=$c;
        $sql="select * from usuarios where usu_mail='$mail'";
        $resulset= mysqli_query($c,$sql);
        $registro= mysqli_fetch_assoc($resulset);
        return $registro['usu_id'];
    }
?>