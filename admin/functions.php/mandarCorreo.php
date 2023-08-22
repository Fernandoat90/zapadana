<?php
require 'conection.php';
$mail = $_POST['mail'];


$conection = conectar();
$sqlSentence = "select * from usuarios where usu_mail='$mail';"; //Verifica q exista el correo en la base de datos
mysqli_query($conection, $sqlSentence);

if (mysqli_affected_rows($conection) > 0) {
  
  $name = "ZapaDana";
  $asunto = "Correo Mandado";
  $mensaje = "https://equipodinamita23.000webhostapp.com/restablecerContrasena2.php?mail=" . $mail;
  $header = "From: ZapaDana@example.com" . "\r\n";
  $header .= "Reply-To: noreply@example.com" . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion();


  @mail($mail, $asunto, $mensaje, $header);

  header("location:./../restablecerContrasena.php?env");  //ah. viene de acá. ok. MANDA CORREO SI EXISTE
} else {
  header("location:./../restablecerContrasena.php?sin");  // si no existe, avisa
}
