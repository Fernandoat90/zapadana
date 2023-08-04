<?php
    require "./functions.php/seguridadHome.php";
?>

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
    <title>ZapaDana</title>
</head>
<body>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZapaDana</title>
    <link rel="stylesheet" href="./css/confirmarCompra.css">
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body style="background-color: var(--c2);">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div id="gifCarga" style="width: 30%;height: 50%; background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;">

        </div>
    </div> 
<?php
    require "./components/bigCardShoe.php";
?>

    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                

                            </div>

                            <div id="contenedorNombre">
                                <h2 id="NombrePagina" style="color:white" >Confirmar</h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>
                        <a id="botonAtras" title="Home" style=" width:100px;display:flex;justify-content:center;align-items:center;color:white;position:relative;right:25%;bottom:14%;height:80px;background-image: url('./img/prueba-logo4.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;" href="./filtro.php"></a>
                        <a id="botonLogout" title="Cerrar Sesion" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;left:30%;" href="./functions.php/logout.php"></a>

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
    
    <script src="./js/chargeFile.js"></script>
</body>
</html>