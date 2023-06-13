<?php
require "./functions.php/conection.php";
$genero= $_POST['genero'];

if($genero==1){
    echo "Hombre";
}
else if($genero==2){
    echo "Mujer";
}

else{
    echo"Genero Indefinido";
}
$sql1="select * from calzados";
$c=conectar();
if($genero==1){
    
    $sql2="select * from stock_masc";
}
else if($genero==2){
    $sql2="select * from stock_fem";
    
}
$resulset=mysqli_query($c,$sql2);

echo strval($resulset) ;