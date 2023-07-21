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
    $resulset= devolverResulset(conectar(),"select  s.stock_img, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, s.stock_id,s.estado_id,s.cal_id,s.color_id,s.n_35,s.n_36,s.n_37,s.n_38,s.n_39,s.n_40,s.n_41,s.n_42,s.n_43,s.n_44,s.n_45 from calzados c right join stock s on c.cal_id = s.cal_id having c.cal_gen='$genero';");

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
</head>
<body style="background-color: bisque;">

    <div id="main" >
        <div id="todoElRegistrase">
            <div id="logo_y_nombre" class="container">

                <div id="contenedorNombreLogo">

                        <div id="subContenedorLogoNombre">
                            <div id="contenedorLogo">
                                <img id="logo" src="./img/logo.png" alt="Logo de la página">

                            </div>

                            <div id="contenedorNombre">
                                <h2 ><?php if($genero=="M"){
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

                </div>


            </div>


            <div class="cards">
                    <?php
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
                        }
                            
                    ?>
            </div>


       
        

        </div>
       


    </div>
    <script src="./js/filtro.js"></script>
    
</body>
</html>
</body>
</html>