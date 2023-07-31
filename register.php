<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashi</title>
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
                    <form style="height:100%;" method="post" id="contenedorForm" action="./functions.php/altaUsuario.php" >
                        <div id="formR">
                            

                            <h1 id="titleregistro">Registrate! </h1>

                            <div id="inputTextos"  >
                              
                                   
                                    <input style="height:45px;" placeholder="Nombre" name="nom"type="text" required>
                                    <input style="height:45px;" placeholder="Apellido" name="ape"type="text" required>
                                    <input style="height:45px;" placeholder="Dirección" name="dir"type="text" required>
                                    <input style="height:45px;" placeholder="Correo" name="mail"type="email" required>
                                    <input style="height:45px;" placeholder="Contraseña" name="password"type="password" id="pass" required>
                                    <input style="height:45px;" name="pass2" placeholder="Confirmar Contraseña" type="password" id="pass2" required>
                                    <?php 
                                    if(isset($_GET['invalida'])){
                                        echo"<strong style=color:red;>¡¡¡ Las contraseñas No coinciden !!!</strong>"; 
                                    }
                                    
                                    if(isset($_GET['usuarioExistente'])){
                                        echo"<strong style=color:red;>¡¡¡ Correo ya en uso !!!</strong>"; 
                                    }
                                    
                                
                                    ?>

                            </div>

                            <div id="inputSubmit" >
                            <input id="botomRegistrarse" type="submit" value="Registrarme" >
                            
                            </div>
                            
                        
                            <div id="yaTenesCuenta">

                                <a id="linkLoggin" href="login.php">¿Ya tenés cuenta? Inicia Sesion!</a>
                            </div>
                        </div>
                    </form>
            </div>
                                           

        </div>


    </div>

</body>
</html>