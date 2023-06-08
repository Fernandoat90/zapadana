<?php
//conexion
function conectar(){
    $serv="localhost";
    $usr="root";
    $pss="";
    $bd="zapa_desarrollo";

    $c=mysqli_connect($serv, $usr, $pss, $bd);
    return $c;
}//fin conexion

//inicio de sesion
function loggin($usu,$contra){
    $c=conectar();
    $sql="SELECT * FROM usuarios where usu_mail='$usu'";

 $resulset=mysqli_query($c,$sql);

 $registro=mysqli_fetch_assoc($resulset);

 if(mysqli_affected_rows($c)>0){

    if($contra==$registro['usu_pass']){
      echo "iniciar sesion";
      session_start();
      $_SESSION['id']=$registro['usu_id'];
      $_SESSION['nombre']=$registro['usu_nombre'];
      $_SESSION['tipoUsuario']=$registro['rol_id'];
  
      switch($registro['rol_id']){
        case 1:
          header("Location:admin.php");
          break;
        case 2:
          header("Location:usuario.php");
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
      echo "<h1>No existe el usuario $usu<br><br></h1>";
      echo "<br><br><h2><a href=index.php><button>Iniciar sesion</button></a></h2>";
  }

}//fin inicio de sesion

//alta usuario
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

//pag inicio
function inicio(){
    ?>
    <form>
        Usuario<input type="text" name=usu ><br><br>
        Contraseña<input type="password" name=pass><br><br>
        <input type="submit" name=in_sesion value="Iniciar sesion">
    </form>
    <br>
    <a href="index.php?regis"><button >Registrarse</button></a><br><br>
    <a href=recu_pass.php>Recuperar contraseña</a>
    <?php
}//fin pag inicio

//pag registro
function registro(){
    ?>
    <form>
    Nombre: <input type="text" name=nom><br><br>
    Apellido: <input type="text" name=ape><br><br>
    Direccion: <input type="text" name=dir><br><br>
    Mail: <input type=text name=mail placeholder="example@gmail.com"><br><br>
    Contraseña: <input type="password" name=pass><br><br>
    <input type="submit" name=cargar value="Cargar usuario"><br><br>
   </form>
   <a href="index.php"><button>Inicio de Sesion</button></a>
<?php
}//fin pag registro
?>