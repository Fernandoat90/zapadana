<?php
    require "./functions.php/seguridadHome.php";
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
    <link rel="stylesheet" href="./css/filtro.css">
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body style="background-color: bisque;z-index:-1;">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div style="width: 30%;height: 50%; background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;">

        </div>
    </div> 
    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <img id="logo" src="./img/logo.png" alt="Logo de la página">

                            </div>

                            <div id="contenedorNombre">
                                <h2 >Genero</h2>
                            </div>
                        </div>
                        <style>
                            
                        </style>
                        <a id="botonAtras" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;right:60%;background-image: url('./img/home.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;" href="./filtro.php"></a>
                        <a id="botonLogout" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;left:30%;" href="./functions.php/logout.php"></a>
                </div>


            </div>


            <div id="registro" class="container">

                    <form id="contenedorForm">
                        <h3 class="genderName" style="margin-left:5%;">Hombre</h3>
                        <div id="formR">
                            <div style="display:none;" id="inputTextos" style="justify-content: center;">
                                    <input placeholder="genero" value=1 name="genero" type="text">
                                
                            </div>

                            <div id="inputSubmit" style="display: flex; justify-content:center; align-items:center;">
                            <input id="botomRegistrarse" type="submit" value="" formaction="./showShoes.php" formmethod="post">
                            </div>
                        </div>
                        
                    </form>




                    <form id="contenedorForm">
                    <h3 class="genderName" style="margin-left:5%;">ver mis reservas</h3>
                        <div id="formR">
                            <div id="inputTextos"style="display:none" style="justify-content: center;">
                                    <input  placeholder="genero" value=1 name="genero" type="text">
                                
                            </div>

                            <div id="inputSubmit">
                            <input id="botomRegistrarse" style="background-image: url('img/mujerFelizZapatillas.png');
                            background-size: 100% 100%" type="submit" value="" formaction="./misReservas.php" formmethod="post">
                            </div>
                        </div>
                        
                    </form>




                    <form id="contenedorForm">
                    <h3 class="genderName" style="margin-left:5%;">Mujer</h3>
                        <div id="formR">
                            <div id="inputTextos"style="display:none" style="justify-content: center;">
                                    <input  placeholder="genero" value=2 name="genero" type="text">
                                
                            </div>

                            <div id="inputSubmit">
                            <input id="botomRegistrarse" style="background-image: url('img/mujer.png');
                            background-size: 100% 100%" type="submit" value="" formaction="./showShoes.php" formmethod="post">
                            </div>
                        </div>
                        
                    </form>










            </div>
        

        </div>
        <div id="aboutOf" class="container">

            <div id="allInformation">

                    <div class="containersInfo" id="sobreFlashi">
                            <div class="nombres">
                                <h2>Sobre Flashi</h2>

                            </div>

                            <div .links>

                                <a class="items" href="">Contacto</a><br>
                                <a class="items" href="">Politicas de Privacidad</a> <br>
                                <a class="items" href="">Terminos y Condiciones</a>


                            </div>

                    </div>

                    

                   

            </div>


        </div>


    </div>
    
    <script src="./js/filtro.js"></script>
    <script src="./js/chargeFile.js"></script>
</body>
</html>
</body>
</html>