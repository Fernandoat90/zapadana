<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZapaLogin</title>
  <link rel="stylesheet" href="./css/loginRegistrarse.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: black;margin:0;padding:0;">

  <!-- carrusel -->
  <div class="container" style="width:100vw">

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


      <div id="registro" class="container">
        
        

        <form style="height:100%;" id="contenedorForm">
          <div id="formR">
            
          <br>
          <img id="logo" src="./img/Logo2.png" alt="Logo de la página" style="width:130px;height:20%;margin:auto;">
         
            <div id="inputTextos" style="justify-content: center;">
            <?php
          if (isset($_GET['valida'])) {
            echo "<h4 style=color:green;padding-left:10%;position:relative;right:8%;><strong>Su usuario fue cargado con exito</strong></h4>";
          }

          if (isset($_GET['contrasenaActualizada'])) {
            echo "<h4 style=color:green;padding-left:10%;position:relative;right:8%;><strong>Contraseña Actualizada</strong></h4>"; //carteles de confirmacion para no hcaer otra pagina???
          }

          if (isset($_GET['cuentaInvalida'])) {
            echo "<h4 style=color:red;padding-left:10%;position:relative;right:8%;><strong>Usuario incorrecto</strong></h4>"; //carteles de confirmacion para no hcaer otra pagina???
          }

          ?>
              <input id="email2" placeholder="Correo" style="height:30px;" name="mail2" type="text">
              <input id="pass2" style="height:30px;" style="margin-top:10px;" name="pass2" placeholder="Contraseña" type="password">
              <input style="display:none;" id="email" placeholder="Correo2" name="mail" type="text"> <!-- Esto era para comparar en la base de datos si existe un usuario con este mail -->
              <input id="pass" style="display:none;" name="pass" placeholder="Contraseña1" type="text"> <!-- ??? no sé -->
              <a style="position: relative;top:4px;" href="restablecerContrasena.php">¿Olvidaste tu Contraseña?</a>

            </div>

             <div id="inputSubmit">
              <input id="botomRegistrarse" class="BotomFunction" type="submit" value="Iniciar Sesion"> 
            </div>
            <div style="display:none;" id="inputSubmit">
              <input id="botomRegistrarseVerdadero" class="BotomFunction" type="submit" value="Iniciar Sesion verdadero" formaction="./functions.php/loggin.php" formmethod="post"> <!-- ESTO MANDA A LA VERIFICACION DE ROLES??? -->
            </div>
          <div id="yaTenesCuenta">

            <a id="linkLoggin" href="register.php">¿No tenés cuenta? Registrate!</a>


          </div>
          
          </div>
        </form>
      </div>

      </div>
    </div>

  <script src="./js/logg.js"></script> <!-- qué es esto??? -->

</body>

</html>