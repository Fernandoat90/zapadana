<?php

 function conectar(){
    $serv="localhost";
    $usr="id20631478_root";
    $pss="1.aAmnbv";
    $bd="id20631478_zapa_desarrollo";

    // $serv="localhost";
    // $usr="root";
    // $pss="";
    // $bd="zapa_desarrollo";

    $c=mysqli_connect($serv, $usr, $pss, $bd);
    return $c;
}//fin conexion