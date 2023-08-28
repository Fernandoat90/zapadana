<?php
    
    $tipo=$_POST['tipo_id'];
    $marca=$_POST['cal_desc'];
    $precio=$_POST['cal_precio'];
    $genero=$_POST['cal_gen'];
    function subirProductoGeneral($c,$tipo,$marca,$precio,$genero){
        $conection=$c;
        $sql3="INSERT INTO calzados(cal_desc,cal_precio,cal_gen,tipo_id) VALUES ('$marca',$precio,'$genero',$tipo)";
        mysqli_query($c,$sql3);

        if(mysqli_affected_rows($conection)>0){
            echo "<h2 style='color:white;'> Calzado General Cargado</h2>";
        }
        else{
        
                echo "<h2 style='color:white;'> ERROR AL CARGAR</h2>";
            
        }
    }

    