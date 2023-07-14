<link rel="stylesheet" href="menu.css">
<?php
$nombre = $_GET['usu'];
$contra = $_GET['contra'];

require "./funciones.php";
$c = conectar();

$sql = "SELECT * FROM usuario where usu='$nombre'";

$resulset = mysqli_query($c, $sql);

$registro = mysqli_fetch_assoc($resulset);

if (mysqli_affected_rows($c) > 0) {

  if ($contra == $registro['pass']) {
    session_start();
    $_SESSION['id'] = $registro['leg'];
    $_SESSION['nombre'] = $registro['nom'];
    $_SESSION['tipoUsuario'] = $registro['rol_id'];

    switch ($registro['rol_id']) {
      case 1:
        header("Location:/direc.php"); //q es direc y a donde llevaaaa
        break;
      case 2:
        header("Location:/profesor.php"); // q es profesor a donde llevaaa
        break;
      default:
        break;
    }
  } else {
    echo "La contraseña es incorrecta <br><br>";
    echo "<br><br><h2><a href=index.php><button>Iniciar sesion</button></a></h2>";
  }
} else {
  echo "<h1>No existe el usuario $nombre<br><br></h1>";
  echo "<br><br><h2><a href=index.php><button>Iniciar sesion</button></a></h2>";
}





?>