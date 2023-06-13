<?php
/*
session_start();
if(isset ($_SESSION['id']) &&($_SESSION['tipoUsuario'])==1){
//todo ok

}
else{
    echo"Pagina Prohibida. Inicie Sesion";
    exit();
}
*/

require '../functions.php/conection.php';
$c = conectar();
$sql = "select * from tipos;";

$tiposMartriz = mysqli_query($c, $sql);



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
    <strong>
        <h1>Página de Administrador</h1>
    </strong>
    <h3>Agregar Calzados Generales</h3>
    <form> <br>
        ID: <input name="" type="number">
        <br>
        TIPO:
        <select name="tipo"> <?php
                                while ($tipo = mysqli_fetch_assoc($tiposMartriz)) {
                                ?> <option value="<?php echo $tipo['tipo_id'] ?>"><?php echo $tipo['tipo_desc'] ?></option> <?php

                                                                                                    }
                                                                                                        ?>


        </select>
        <br>
        Marca: <input type="text"> <br>

        Precio: <input type="float" step=0.25> <br>
        <input type="submit" value="Subir Calzado General">
    </form>
    <form action="logout.php"><input type=submit name=cerrar value="Cerrar Sesion"></form>
</body>

</html>