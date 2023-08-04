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
    require "./components/shoeCard.php";
    require "./functions.php/conection.php";
    require "./functions.php/devolverResulset.php";
    $conect=conectar();
    $resulset= devolverResulset($conect,"select  s.stock_img, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, s.stock_id,s.estado_id,s.cal_id,s.color_id,s.n_35,s.n_36,s.n_37,s.n_38,s.n_39,s.n_40,s.n_41,s.n_42,s.n_43,s.n_44,s.n_45 from calzados c right join stock s on c.cal_id = s.cal_id having c.cal_gen='$genero' && s.estado_id=1;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZapaDana</title>
</head>
<body>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZapaDana</title>
    <link rel="stylesheet" href="./css/showShoes.css">
    <link rel="stylesheet" href="./css/logout.css">
</head>
<body style="background-color: var(--c2);">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div id="gifCarga" style="width: 30%;height: 50%; background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;">

        </div>
    </div> 

    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                

                            </div>

                            <div id="contenedorNombre">
                                <h2 id="NombrePagina" style="color:white" ><?php if($genero=="M"){
                                    echo "Masculino";
                                }
                                else if($genero=="F"){
                                    echo "Femenino";
                                }
                                else{
                                    echo "Travesti";
                                } ?></h2> <!-- PONER DENTRO DE ESTE H2 LO QUE QUERES QUE APAREZCA ARRIBA-->
                            </div>
                        </div>
                        <a id="botonAtras" title="Home" style=" width:100px;display:flex;justify-content:center;align-items:center;color:white;position:relative;right:25%;bottom:14%;height:80px;background-image: url('./img/prueba-logo4.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;" href="./filtro.php"></a>
                        <a id="botonLogout" title="Cerrar Sesion" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;left:30%;" href="./functions.php/logout.php"></a>

                </div>


            </div>


            <div class="cards">
                    <?php
                    
                        if(mysqli_Affected_rows($conect)>0){
                    
                        while($registro=mysqli_fetch_assoc($resulset)){

                            $id=$registro['stock_id'];
                            $precio=$registro['cal_precio'];
                            $marca=$registro['cal_desc'];
                            if($registro['tipo_id']==1){
                            $tipo="Deportiva";}
                            else{
                                $tipo="De vestir";
                            }
                            $tallesDisponibles=[$registro['n_35'],$registro['n_36'],$registro['n_37'],$registro['n_38'],$registro['n_39'],$registro['n_40'],$registro['n_41'],$registro['n_42'],$registro['n_43'],$registro['n_44'],$registro['n_45']];
                            $color=1;
                            $imgUrl=$registro['stock_img'];
                            ShoeCard($id,$precio,$marca,$tipo,$imgUrl,$tallesDisponibles,$color);
                        }}
                        else{
                            echo "<h2 style='position:relative;top:20%;'>No hay zapatos para mostrar</h2>";
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