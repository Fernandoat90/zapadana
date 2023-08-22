<?php
$affectedRowsCreateReserve=$_POST["affectedRowsCreateReserve"];
$affectedForUpdateStock=$_POST["affectedForUpdateStock"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZapaDana</title>
    <link rel="stylesheet" href="./css/reservaCompletada.css">
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body style="background-color: var(--c2);">

    <div id="main" style="green">
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <!--<img id="logo" src="./img/logo.png" alt="Logo de la página">
-->
                            </div>

                            <div id="contenedorNombre">
                                <h2 id="NombrePagina" style="color:white" >Reservada</h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>
                        <a id="botonAtras" title="Home" style=" width:100px;display:flex;justify-content:center;align-items:center;color:white;position:relative;height:80px;background-image: url('./img/prueba-logo4.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;" href="./filtro.php"></a>
                        <a id="botonLogout" title="Cerrar Sesion" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;" href="./functions.php/logout.php"></a>
                </div>


            </div>


            <div class="cards">
                <?php

                        if($affectedForUpdateStock>0){
                                if($affectedRowsCreateReserve>0){
                                        echo "<h2>RESERVA CREADA Y CORREO MANDADO.</h2>";
                                }
                                else{
                                    echo "ERROR AL CREAR LA RESERVA";
                                }
                        }

                        else{
                            echo "ERROR DE STOCK";
                        }

                        
                ?>
                    <style>
                        #buttomHomee:hover{
                            background-color:blueviolet;
                            color:white;
                        }
                    </style>
                    <a id="buttomHomee" style="border:1px solid black; width:100px;background-color:var(--c1);height:60px;display:flex;justify-content:center;align-items:center;border-radius:25px;color:white;text-decoration:none;" href="./filtro.php">Inicio</a>
            </div>


       
        

        </div>
       


    </div>
    <div id="foot">

    </div>
    <script src="./js/filtro.js"></script>
    
</body>
</html>