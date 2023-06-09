<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Archivos de bootstrap -->
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="inicio.css">

</head>
<body>


<div class="container">
 
  <div id="carrusel" class="carousel slide" data-ride="carousel">

    <!-- Opcional, bullets abajo para saltar directamente a una foto (si los pones tiene q haber 1 por foto) -->
    <ol class="carousel-indicators">
      <li data-target="#carrusel" data-slide-to="0" class="active"></li>
      <li data-target="#carrusel" data-slide-to="1"></li>
      <li data-target="#carrusel" data-slide-to="2"></li>
    </ol>

    <!-- Contenedor de las fotos -->
    <div class="carousel-inner" role="listbox">

      <!-- Foto 1 -->
      <div class="item active">
        <img src="inicio-2.jpg">
      </div>

      <!-- Foto 2 -->
      <div class="item">
        <img src="https://http2.mlstatic.com/tenis-zapatillas-nike-zoom-dama-D_NQ_NP_395115-MCO25172018979_112016-F.jpg">
      </div>

      <!-- Foto 3 -->
      <div class="item">
        <img src="https://http2.mlstatic.com/tenis-zapatillas-zoom-dama-2017-D_NQ_NP_343815-MCO25319205999_012017-F.jpg">
      </div>

    </div>

    <!-- Controles para pasar las fotos -->
    <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>


    
    <a href="index.php?inicio" style="color:black;text-align:center;"><h1>ZapaDana</h1></a>
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