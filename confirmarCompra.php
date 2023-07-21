<?php
require "./functions.php/conection.php";
require "./functions.php/devolverResulset.php";

$id=$_POST["id"];

$stock=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from stock where stock_id=$id;"));
$color=$stock["color_id"];
$color=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from colores where color_id=$color;"));
$calzado= $stock["cal_id"];
$calzado=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from calzados where cal_id=$calzado;"));
$tipo=$calzado["tipo_id"];
$tipoM=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from tipos where tipo_id=$tipo;"));
if($calzado["cal_gen"]=="M"){
    $genero="Masculino";
}
else{
    $genero="Femenino";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/confirmarCompra.css">
</head>
<body style="background-color: bisque;">
<?php
    require "./components/bigCardShoe.php";
?>

    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <img id="logo" src="./img/logo.png" alt="Logo de la página">

                            </div>

                            <div id="contenedorNombre">
                                <h2 >Confirmar</h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>

                </div>


            </div>    
            <div class="containerComponent">
                <?php
                
                $precio=$calzado["cal_precio"];
                $marca=$calzado["cal_desc"];
                $tipo=$tipoM["tipo_desc"];
                $color=$color["color_nom"];
                $url=$stock["stock_img"];
                $talle=$_POST["talle"];
                
                bigCardShoe($id,$precio,$marca,$tipo,$genero,$color,$url,$talle); ?>
            </div>
        </div>
        
    </div>
    

</body>
</html>