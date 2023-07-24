<?php
    require "./functions.php/seguridadHome.php";
?>
<?php
    if($_POST['genero']==1 ){
        $genero="M";
    }
    else if($_POST['genero']==2){
        $genero="F";
    }
    else{
        echo "Travesti";
    }
    require "./components/misReservas.php";
    require "./functions.php/conection.php";
    require "./functions.php/devolverResulset.php";
    $user=$_SESSION['id'];
    $conect=conectar();
    $reservas= devolverResulset($conect,"select * from reserva where usu_id=$user;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/showShoes.css">
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body style="background-color: black;">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div style="width: 30%;height: 50%; background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;">

        </div>
    </div> 
    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <img id="logo" src="./img/logo.png" alt="Logo de la página">

                            </div>

                            <div id="contenedorNombre">
                                <h2 >Reservas</h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>
                        <a id="botonLogout" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;left:30%;" href="./functions.php/logout.php"></a>

                </div>


            </div>


            <div class="cards">
                    <?php
                    if(mysqli_Affected_rows($conect)>0){
                        while($registro=mysqli_fetch_assoc($reservas)){
                            $idStock=$registro['stock_id'];
                            $caracteristicasStock= mysqli_fetch_assoc(devolverResulset(conectar(),"select * from stock where stock_id=$idStock;"));
                            $idCalzado=$caracteristicasStock['cal_id'];
                            $caracteristicasCalzado= mysqli_fetch_assoc(devolverResulset(conectar(),"select * from calzados where cal_id=$idCalzado;"));
                            $id=$registro['stock_id']; //Tendria que funcar sin cambios
                            $precio=$caracteristicasCalzado['cal_precio'];
                            $marca=$caracteristicasCalzado['cal_desc'];
                            if($caracteristicasCalzado["tipo_id"]==1){
                            $tipo="Deportiva";}
                            else{
                                $tipo="De vestir";
                            }
                            $talle=$registro["reser_talle"];
                            $color=1;
                            $imgUrl=$caracteristicasStock['stock_img'];
                            ShoeCard($id,$precio,$marca,$tipo,$imgUrl,$talle,$color);
                        }}
                          else{
                            echo "<h1>No tienes reservas hechas</h1>";
                          }  
                    ?>
            </div>


       
        

        </div>
       


    </div>
    <script src="./js/filtro.js"></script>
    <script src="./js/chargeFile.js"></script>
</body>
</html>
</body>
</html>