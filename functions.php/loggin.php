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
      $_SESSION['tipoUsuario']=$registro['rol_id'];
  
      switch($registro['rol_id']){
        case 1:
          header("Location:/admin/admin.php");
          break;
        case 2:
          header("Location:/filtro.php");
          break;
        default:
        break;          
      }
    }
  
      else {
          echo "La contraseña es incorrecta <br><br>";
          echo "<br><br><h2><a href=index.php><button>Iniciar sesion</button></a></h2>";
      }
  
  }
  else {
      echo "<h1>No existe el usuario $mail<br><br></h1>";
      echo "<br><br><h2><a href=https://equipodinamita23.000webhostapp.com/login.php><button>Iniciar sesion</button></a></h2>";
  }

}//fin inicio de sesion

loggin($mail,$contra);