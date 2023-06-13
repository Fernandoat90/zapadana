<?php

ini_set("SMTP", "david64423@gmail.com");
ini_set("smtp_port", "25");

$to = "david16115@outlook.com";
$subject = "Asunto del correo electrónico";
$message = "Este es el mensaje del correo electrónico.";

mail($to, $subject, $message);
?>