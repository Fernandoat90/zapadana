<?php
$mail= $_POST['mail'];
$contra =$_POST['pass'];
require './conection.php';
function loggin($mail,$contra){
    $c=conectar();
    $sql="SELECT * FROM usuarios where usu_mail='$mail'";

 $resulset=mysqli_query($c,$sql);

 $registro=mysqli_fetch_assoc($resulset);

 if(mysqli_affected_rows($c)>0){

    if($contra==$registro['usu_pass']){
      session_start();
      $_SESSION['id']=$registro['usu_id'];
      $_SESSION['nombre']=$registro['usu_nombre'];
      $_SESSION['email']=$registro['usu_mail'];
      $_SESSION['rol']=$registro['rol_id'];
      $_SESSION['stockSubido']=false;
  
      switch($registro['rol_id']){
        case 1:
          header("Location:../admin/admin.php");
          break;
        case 2:
          header("Location:../filtro.php");
          break;
        default:
        break;          
      }
    }
  
      else {
          header("location:../login.php?cuentaInvalida");
      }
  
  }
  else {
    header("location:../login.php?cuentaInvalida");
  }

}//fin inicio de sesion

loggin($mail,$contra);

?>