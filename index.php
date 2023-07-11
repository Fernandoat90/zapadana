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
    <div id="main"> 
   
        <div id="todoElRegistrase" >
       <br><br><br><h3 style="color:white;text-align:center;">Haz click en el logo para Ingresar</h3> 
       <div style="text-align:center;">
<a href=login.php><button style="background-color:rgba(224, 140, 30, 0.83);border-radius:25px;"><img src="./img/logo-ini.png" alt="logo" ></button></a>
</div>
 
            </div>


        </div>

</body>

</html>