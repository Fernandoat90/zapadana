
<?php
    session_start();
?>
<?php
require 'conection.php';


  $name = "ZapaDana";
  $asunto = "Reserva de zapato";
  $mensaje = "Su reserva fue realizada con exito. <br> Gracias por elegirnos.";
  $header = "From: ZapaDana@example.com" . "\r\n";
  $header .= "Reply-To: noreply@example.com" . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion();


  @mail("david64423@gmail.com", $asunto, $mensaje, $header);
  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="bodyElement">
<div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;">
        <div style="width: 30%;height: 50%; background-image:url('../img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;">

        </div>
    </div>
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



