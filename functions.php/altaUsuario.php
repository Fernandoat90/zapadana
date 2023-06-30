<?php

require 'conection.php';
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$dir=$_POST['dir'];
$mail=$_POST['mail'];
$pass=$_POST['password'];
$pass2=$_POST['pass2'];
$id=2;

$conection=conectar();
$sqlSentence="select * from usuarios where usu_mail='$mail';";
mysqli_query($conection,$sqlSentence);

if(mysqli_affected_rows($conection)>0){

 header("location:./../register.php?usuarioExistente");

//$hash = password_hash($pass, PASSWORD_DEFAULT);

}
else{

    if ($pass2==$pass) {
    
    function alta_usu($nom,$ape,$dir,$mail,$pass,$id){
    $c=conectar();
    $sql="INSERT INTO usuarios (usu_nombre,usu_apellido,usu_dir,usu_mail,usu_pass,rol_id)
     VALUES ('$nom','$ape','$dir','$mail','$pass','$id')";
    $res=mysqli_query($c,$sql);
    if(mysqli_affected_rows($c)>0){
        header("location:./../login.php?valida");
    
    }else{
        
        echo"Error al cargar datos";
    }
}//fin alta usuario

alta_usu($nom,$ape,$dir,$mail,$pass,$id);
    
} else {
    header("location:./../register.php?invalida");

}
    
}