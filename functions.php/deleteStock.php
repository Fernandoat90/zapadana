<?php

require "./conection.php";
function deleteStock($conectar,$id){
    $c=$conectar;
    $sql="update stock set estado_id=2 where stock_id=$id;";
    mysqli_query($c,$sql);
    header("location:../admin/admin.php");
}

deleteStock(conectar(),$_POST["stock_id"]);