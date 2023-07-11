<?php

function conectar(){
    $serv="localhost";
    $usr="id20932155_zapadana";
    $pss="Equipodinamit@23";
    $bd="id20932155_equipodinamita";

    $c=mysqli_connect($serv, $usr, $pss, $bd);
    return $c;
}//fin conexion