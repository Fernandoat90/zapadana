<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashi</title>
    <link rel="stylesheet" href="./css/loginRegistrarse.css">
</head>
<body>

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
                    <form method="post" action="/registro"id="contenedorForm">
                        <div id="formR">
                            <h1 id="titleregistro">Registrate! </h1>

                            <div id="inputTextos">
                              

                                    <input placeholder="Nombre" name="nom"type="text">
                                    <input placeholder="Apellido" name="ape"type="text">
                                    <input placeholder="Dirección" name="dir"type="text">
                                    <input placeholder="Correo" name="mail"type="email">
                                    <input placeholder="Contraseña" name="password"type="password">
                                    <input name="pass2" placeholder="Reintroducir Contraseña" type="text">
                            </div>

                            <div id="inputSubmit">
                            <input id="botomRegistrarse" type="submit" value="Registrarme" formaction="./functions.php/altaUsuario.php" formmethod="post">
                            </div>
                        </div>
                        <div id="yaTenesCuenta">

                                <a id="linkLoggin" href="login.php">¿Ya tenés cuenta? Inicia Sesion!</a>

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