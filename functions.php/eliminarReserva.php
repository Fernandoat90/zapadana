<?php
require './conection.php';
require './devolverResulset.php';
$idEliminarReserva=$_POST['id'];

function eliminarReservaHecha($c,$id){
    
    $sqlDatosDeLaReserva="select * from reserva where reser_id=$id;";
    $resulset=mysqli_query(conectar(),$sqlDatosDeLaReserva);
    $registro=mysqli_fetch_assoc($resulset);
    $idStock=$registro["stock_id"];
    $talle=$registro["reser_talle"];
    //echo "talle:".$talle."<br>";
    //echo $idStock;
    //echo "IDsTOCK: ".$idStock;
    $stock=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from stock where stock_id=$idStock;"));
    
    
    
    $conectionForUpdateStock=conectar();
    
    $cantidad35=($stock["n_35"]+1);
    $cantidad36=($stock["n_36"]+1);
    $cantidad37=($stock["n_37"]+1);
    $cantidad38=($stock["n_38"]+1);
    $cantidad39=($stock["n_39"]+1);
    $cantidad40=($stock["n_40"]+1);
    $cantidad41=($stock["n_41"]+1);
    $cantidad42=($stock["n_42"]+1);
    $cantidad43=($stock["n_43"]+1);
    $cantidad44=($stock["n_44"]+1);
    $cantidad45=($stock["n_45"]+1);

    if ($cantidad35<=0){
        $cantidad35=0;
    }
    else if($cantidad36<=0){
        $cantidad36=0;
    }
    else if($cantidad37<=0){
        $cantidad37=0;
    }
    else if($cantidad38<=0){
        $cantidad38=0;
    }
    else if($cantidad39<=0){
        $cantidad39=0;
    }
    else if($cantidad40<=0){
        $cantidad40=0;
    }
    else if($cantidad41<=0){
        $cantidad41=0;
    }
    else if($cantidad42<=0){
        $cantidad42=0;
    }
    else if($cantidad43<=0){
        $cantidad43=0;
    }
    else if($cantidad44<=0){
        $cantidad44=0;
    }
    else if($cantidad45<=0){
        $cantidad45=0;
    }
    
    switch($talle){
        
        case 35:
            $talleSQL="update stock set n_35=$cantidad35 where stock_id=$idStock;";
        break;
        
        case 36:
            $talleSQL="update stock set n_36=$cantidad36 where stock_id=$idStock;";
        break;
        
        case 37:
            $talleSQL="update stock set n_37=$cantidad37 where stock_id=$idStock;";
        break;
        
        case 38:
            $talleSQL="update stock set n_38=$cantidad38 where stock_id=$idStock;";
        break;
        
        case 39:
            $talleSQL="update stock set n_39=$cantidad39 where stock_id=$idStock;";
        break;
        
        case 40:
            $talleSQL="update stock set n_40=$cantidad40 where stock_id=$idStock;";
        break;
        
        case 41:
            $talleSQL="update stock set n_41=$cantidad41 where stock_id=$idStock;";
        break;
        
        case 42:
            $talleSQL="update stock set n_42=$cantidad42 where stock_id=$idStock;";
        break;
        
        case 43:
            $talleSQL="update stock set n_43=$cantidad43 where stock_id=$idStock;";
        break;

        case 44:
            $talleSQL="update stock set n_44=$cantidad44 where stock_id=$idStock;";
        break;

        case 45:
            $talleSQL="update stock set n_45=$cantidad45 where stock_id=$idStock;";
        break;
    }
        mysqli_query($conectionForUpdateStock,$talleSQL);
        if(mysqli_Affected_rows($conectionForUpdateStock)>0){
            //echo"Se devolvio el stock";
        }
        else{
            //echo "No se devolvio el stock";
        }
    //DE ACA PARA ARRIBA ESTA EL CODIGO PARA SUBIR UNO AL STOCK CORRESPONDIENTE
    //DE ACA PARA ABAJO ESTA EL CODIGO PARA QUE SE BORRE LA RESERVA
    
    $sqlEliminarReservaHecha="delete from reserva where reser_id=$id;";
    
    mysqli_query($c,$sqlEliminarReservaHecha);
    
    
}
eliminarReservaHecha(conectar(),$idEliminarReserva);

header("location:../misReservas.php");
?>