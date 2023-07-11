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
<div class="container" style="width:100%;">
 
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
    <div id="main" >
        <div id="todoElRegistrase">


            <div id="registro" class="container">

                    <form id="contenedorForm">
                        <br>
             <img id="logo" src="./img/Logo2.png" alt="Logo de la página" style="width:170px;height:40%;margin:auto;">
                        <div id="formR">
                        <?php if(isset($_GET['env'])){
                            echo"<strong style=color:green;>El Mail fue enviado con exito</strong>";
                        }
                        
                        ?>
                            <div id="inputTextos" style="justify-content: center;">
                                    <input style="height:30px" placeholder="Correo" name="mail" type="text">
                                    <input style="display:none; margin-top:10px ;" name="pass" placeholder="Contraseña" type="text">
                                    <input style="display:none; margin-top:10px ;" name="pass2" placeholder="Reintroducir Contraseña" type="text">
                                    <a style="display:none; 
                                    position: relative;top:10%;" href="">¿Olvidaste tu Contraseña?</a>
                            </div>

                            <div id="inputSubmit">
                            <input id="botomRegistrarse" type="submit" value="Restablecer Contraseña" formaction="./functions.php/mandarCorreo.php" formmethod="post">
                            </div>                    
                            <?php if(isset($_GET['sin'])){
                            echo"<strong style=color:red;> No existe el mail ingresado </strong>";
                        }
                        
                        ?>
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


            </div>


        </div>


    </div>
    
</body>
</html>