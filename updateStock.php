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
    $sqlForCreateReserve="insert into reserva(usu_id, stock_id ) values ($idUser,$idStock);";
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
    <title>Document</title>
</head>
<body id="bodyElement">
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