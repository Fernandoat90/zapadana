<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginRegistrarse.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: black;margin:0;padding:0;">

<!-- carrusel -->
<div class="container">
 
  <div id="carrusel" class="carousel slide" data-ride="carousel">

    <!-- Opcional, bullets abajo para saltar directamente a una foto (si los pones tiene q haber 1 por foto) -->
    <ol class="carousel-indicators">
      <li data-target="#carrusel" data-slide-to="0" class="active"></li>
      <li data-target="#carrusel" data-slide-to="1"></li>
      <li data-target="#carrusel" data-slide-to="2"></li>
    </ol>

    <!-- Contenedor de las fotos -->
    <div class="carousel-inner" role="listbox">

      <!-- Foto 1 -->
      <div class="item active">
        <img src="./img/cor1.png">
      </div>

      <!-- Foto 2 -->
      <div class="item">
        <img src="./img/icon22.png">
      </div>

      <!-- Foto 3 -->
      <div class="item">
        <img src="./img/car3.png">
      </div>

    </div>

    <!-- Controles para pasar las fotos -->
    <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div id="main">
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                    <div id="subContenedorLogoNombre">
                        <div id="contenedorLogo">
                            <img id="logo" src="./img/logo.png" alt="Logo de la página">

                        </div>

                        <div id="contenedorNombre">
                            <h2>Zapa<span style="color:red ;">Dana</span></h2>
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
                            <a style="position: relative;top:10%;" href="restablecerContrasena.php">¿Olvidaste tu Contraseña?</a>
                        </div>

                        <div id="inputSubmit">
                            <input id="botomRegistrarse" type="submit" value="Iniciar Sesion" formaction="./functions.php/loggin.php" formmethod="post">
                        </div>
                    </div>
                    <div id="yaTenesCuenta">

                        <a id="linkLoggin" href="register.php">¿No tenés cuenta? Registrate!</a>

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