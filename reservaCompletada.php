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
    <title>Document</title>
    <link rel="stylesheet" href="./css/showShoes.css">
</head>
<body style="background-color: bisque;">

    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <img id="logo" src="./img/logo.png" alt="Logo de la página">

                            </div>

                            <div id="contenedorNombre">
                                <h2 ></h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>

                </div>


            </div>


            <div class="cards">
                <?php

                        if($affectedForUpdateStock>0){
                                if($affectedRowsCreateReserve>0){
                                        echo "RESERVA CREADA Y CORREO MANDADO.";
                                }
                                else{
                                    echo "ERROR AL CREAR LA RESERVA";
                                }
                        }

                        else{
                            echo "ERROR DE STOCK";
                        }

                        
                ?>
                    <button href="filtro.php">Volver a inicio</button>
            </div>


       
        

        </div>
       


    </div>
    <script src="./js/filtro.js"></script>
    
</body>
</html>