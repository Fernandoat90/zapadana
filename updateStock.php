<?php
    require "./functions.php/seguridadHome.php";
?>
<?php
    require "./functions.php/conection.php";
    require "./functions.php/devolverResulset.php";
    $idStock=$_POST["id"];
    $stock=mysqli_fetch_assoc(devolverResulset(conectar(),"select * from stock where stock_id=$idStock;"));
    
    
    
    $conectionForUpdateStock=conectar();
    
    $cantidad35=($stock["n_35"]-1);
    $cantidad36=($stock["n_36"]-1);
    $cantidad37=($stock["n_37"]-1);
    $cantidad38=($stock["n_38"]-1);
    $cantidad39=($stock["n_39"]-1);
    $cantidad40=($stock["n_40"]-1);
    $cantidad41=($stock["n_41"]-1);
    $cantidad42=($stock["n_42"]-1);
    $cantidad43=($stock["n_43"]-1);
    $cantidad44=($stock["n_44"]-1);
    $cantidad45=($stock["n_45"]-1);

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



    //echo "\n".$idStock;
    $tallePedido=$_POST["talle"];

    switch($tallePedido){
        
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
    $conectionForCreateReserve= conectar();
    $idUser=$_SESSION['id'];
    $sqlForCreateReserve="insert into reserva(usu_id, stock_id,reser_talle ) values ($idUser,$idStock,$tallePedido);";
    mysqli_query($conectionForUpdateStock,$talleSQL);
    mysqli_query($conectionForCreateReserve,$sqlForCreateReserve);
    $affectedRowsCreateReserve=mysqli_affected_rows($conectionForCreateReserve);
    $affectedForUpdateStock=mysqli_affected_rows($conectionForUpdateStock);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando Stock</title>
    <style>
        /* PEGAR DE ACA PARA ABAJO */
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

#gifCarga{
    width:30% ;
    height:80% ;
    background-size: 100%;
    position: relative;
    right:15%;
}
 #NombrePagina{
    position: relative;
    left: 70px;
    font-size:2.5rem ;
    
 }

 #botonLogout{
    position: relative;
    left: 25%;
  }
 
#aboutOf{
    position: relative;
    top: 450px;
    display: none;
    z-index: 100;
 }
 .containerComponent{
    display: flex;
    justify-content: center;
 }
/*   
 -TO DELETE THE POSITION OF LOGOUT IMAGE
 -TO DELETE THE SIZES OF THE IMAGE OF THE CHARGE SCREEN  */
/* MOBILE */
    @media(max-width:480px){
        #gifCarga{
            /* width: ;
            height: ; */
        }
        
   }
   
   /* EXTRA SMALL DEVICES */
   @media(min-width:481px) and (max-width:767px){
         
      
   }
   /* SMALL TABLETS */
   @media(min-width:768px) and (max-width:991px){
    
   }
   /* LARGE TABLET / LAPTOPS */
   @media(min-width:992px) and (max-width:1199px){
    
   }











    </style>
</head>
<body id="bodyElement">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;">
        <div id="gifCarga" style=" background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;left:5%;">

        </div>
    </div>
    <form style="display:none">
        <input type="number" name="id" value="<?php echo $idStock  ?>" id=""> <br>
        <input type="number" name="talle" value="<?php echo $tallePedido  ?>" id=""> <br>
        <input type="number" name="affectedRowsCreateReserve" value="<?php echo $affectedRowsCreateReserve  ?>" id=""> <br>
        <input type="number" name="affectedForUpdateStock" value="<?php echo $affectedForUpdateStock  ?>" id="">
        <input type="submit" id="submitElement" value="Enviar" formaction="./functions.php/mandarCorreoReserva.php" formmethod="POST">
    </form>

    <script src="./js/updateStock.js"></script>
</body>
</html>