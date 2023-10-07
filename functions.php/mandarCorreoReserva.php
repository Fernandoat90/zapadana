<?php
    session_start();
?>
<?php
require 'conection.php';

    $font="font-family:'impact';";
  $name = "ZapaDana";
  $asunto = "Reserva de zapato";
  $mensaje = "<div style='width:400px;height:100%;border:1px solid black;min-height:50px;background-color:red;color:white;'> <h2>Su reserva fue realizada con exito.</h2> <br> <h4>Gracias por elegirnos.</h4></div>";
  $header = "From: ZapaDana@example.com" . "\r\n";
  $header .= "Reply-To: noreply@example.com" . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion(). "\r\n";
  $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  @mail($_SESSION['email'], $asunto, $mensaje, $header);
  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    background-color:black;
    color:black;
 }
    </style>
</head>
<body id="bodyElement">

    <form style="display:none">
        <input type="number" name="id" value="<?php echo $idStock  ?>" id=""> <br>
        <input type="number" name="talle" value="<?php echo $tallePedido  ?>" id="">
        <input type="number" name="affectedRowsCreateReserve" value="<?php echo $_POST["affectedRowsCreateReserve"]  ?>" id=""> <br>
        <input type="number" name="affectedForUpdateStock" value="<?php echo $_POST["affectedForUpdateStock"]  ?>" id="">
        <input type="submit" id="submitElement" value="Enviar" formaction="./mandarRC.php" formmethod="POST">
    </form>
    

    <script src="../js/updateStock.js"></script>
</body>
</html>



