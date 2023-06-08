<?php
session_start();
if(isset ($_SESSION['id']) &&($_SESSION['tipoUsuario'])==1){
//todo ok

}
else{
    echo"Pagina Prohibida. Inicie Sesion";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <strong><h1>Hola equipo dinamita</h1></strong>
</body>
</html>