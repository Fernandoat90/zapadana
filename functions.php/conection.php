<?php

 function conectar(){
    $serv="localhost";
    $usr="id20932155_zapadana";
    $pss="Equipodinamit@23";
    $bd="id20932155_equipodinamita";
    
    // $serv="localhost";
    // $usr="id20631478_root";
    // $pss="1.aAmnbv";
    // $bd="id20631478_zapa_desarrollo";

    // $serv="localhost";
    // $usr="root";
    // $pss="";
    // $bd="zapa_desarrollo";

    $c=mysqli_connect($serv, $usr, $pss, $bd);
    return $c;
}//fin conexion