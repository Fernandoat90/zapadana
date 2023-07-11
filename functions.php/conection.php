<?php

function conectar(){
    $serv="localhost";
    $usr="root";
    $pss="";
    $bd="zapa_desarrollo";

    $c=mysqli_connect($serv, $usr, $pss, $bd);
    return $c;
}//fin conexion