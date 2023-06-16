<?php

require './../functions.php/conection.php';
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$dir=$_POST['dir'];
$mail=$_POST['mail'];
$pass=$_POST['password'];
$id=2;
function alta_usu($nom,$ape,$dir,$mail,$pass,$id){
    $c=conectar();
    $sql="INSERT INTO usuarios (usu_nombre,usu_apellido,usu_dir,usu_mail,usu_pass,rol_id)
     VALUES ('$nom','$ape','$dir','$mail','$pass','$id')";
    $res=mysqli_query($c,$sql);
    if(mysqli_affected_rows($c)>0){
        echo"El usuario $nom se cargo con exito";
    
    }else{
        echo"Error al cargar datos";
    }
}//fin alta usuario

alta_usu($nom,$ape,$dir,$mail,$pass,$id);