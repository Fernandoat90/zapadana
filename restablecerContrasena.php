<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginRegistrarse.css">
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
                                <h2>Zada<span style="color:red ;">Dana</span></h2>
                            </div>
                        </div>

                </div>


            </div>


            <div id="registro" class="container">

                    <form id="contenedorForm">
                        <div id="formR">
                            <div id="inputTextos" style="justify-content: center;">
                                    <input placeholder="Correo" name="mail" type="text">
                                    <input style="margin-top:10px ;" name="pass" placeholder="Contraseña" type="text">
                                    <input style="margin-top:10px ;" name="pass2" placeholder="Reintroducir Contraseña" type="text">
                                    <a style="display:none; 
                                    position: relative;top:10%;" href="">¿Olvidaste tu Contraseña?</a>
                            </div>

                            <div id="inputSubmit">
                            <input id="botomRegistrarse" type="submit" value="Restablecer Contraseña" formaction="./functions.php/loggin.php" formmethod="post">
                            </div>
                        </div>
                        <div id="yaTenesCuenta">

                                <a id="linkLoggin" href="login.php">Iniciar Sesion</a>

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

                    <div class="containersInfo" id="Paises">
                        <div class="nombres">

                            <h2 style="visibility: visible;">Paises</h2>
                            

                        </div>

                        <div id="paises">
                            <form>
                                <select id="selectPaises">
                                    <option value="">Argentina</option>
                                    <option value="">Bolivia</option>
                                    <option value="">Paraguay</option>
                                    <option value="">Brasil</option>
                                    <option value="">Perú</option>
                                </select>
                            </form>


                        </div>

                    </div>

            </div>


        </div>


    </div>
    
</body>
</html>