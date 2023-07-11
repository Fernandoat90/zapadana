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
                                <h2 >Genero</h2>
                            </div>
                        </div>

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
                            <input id="botomRegistrarse" type="submit" value="" formaction="./productos.php" formmethod="post">
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
                            background-size: 100% 100%" type="submit" value="" formaction="./productos.php" formmethod="post">
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

                    <div class="containersInfo" id="uneteFlashi">

                        <div class="nombres">
                            <h2>Unete a Flashi</h2>

                        </div>

                        <div .links>
                                <a class="items" href="">Registra tu Restaurante</a><br>
                                <a class="items" href="">Trabaja con Nosotros</a> <br>
                                <a class="items" href="">Conviertete en Flashienvio</a>


                        </div>

                    </div>

                    

            </div>


        </div>


    </div>
    <script src="./js/filtro.js"></script>
    
</body>
</html>
</body>
</html>