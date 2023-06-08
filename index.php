<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ins><h1>Carrusel</h1></ins><br><br>
    <a href="index.php?inicio" style="color:black;"><h1>ZapaDana</h1></a>
    <!-- <form action="principal.php">
        Usuario<input type="text" name=usu ><br><br>
        Contraseña<input type="password" name=pass><br><br>
        <input type="submit" name=inicio value="Iniciar sesion">
    </form>
    <br>
    <a href="registro.php"><button >Registrarse</button></a><br><br>
    <a href=recu_pass.php>Recuperar contraseña</a> -->
</body>
</html>

<?php //inicio y registro
require "funciones.php";
 if(isset($_GET["inicio"])){
  inicio();
}
if(isset($_GET["regis"])){
    registro();
}//fin inicio/registro
?>
<?php
if(isset($_GET["in_sesion"])){
 $usu=$_GET['usu'];
 $contra=$_GET['pass'];
 loggin($usu,$contra);
}
?>

<?php
//cargar usuario
if(isset($_GET["cargar"])){
    $nom = $_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    $usu=$_GET["mail"];
    $contra=$_GET["pass"];
    echo"¿Desea confirmar la operación?";
  ?>  <form>
    <input type=hidden name=nom value=<?php echo($nom)?>>
    <input type=hidden name=ape value=<?php echo($ape)?>>
    <input type=hidden name=dir value=<?php echo($dir)?>>
    <input type=hidden name=mail value=<?php echo($usu)?>>
    <input type=hidden name=pass value=<?php echo($contra)?>>
    <input type="submit" name=si value="Si">
    <a href="registro.php"><button>No</button></a>
  </form>
<?php
}

if(isset($_GET["si"])){
    $nom = $_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    $usu=$_GET["mail"];
    $contra=$_GET["pass"];
    $rol=2;
    // require "funciones.php";
    alta_usu($nom,$ape,$dir,$usu,$contra,$rol);
}
//fin carga de usuario
?>