<?php
require './conection.php';
$idEliminarReserva= $_POST['id'];
function eliminarReservaHecha($c,$id){
    $sqlEliminarReservaHecha="delete from reserva where reser_id=$id;";
    mysqli_query($c,$sqlEliminarReservaHecha);
}
eliminarReservaHecha(conectar(),$idEliminarReserva);

header("location:../misReservas.php");
?>