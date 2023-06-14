<?php
/*
session_start();
if(isset ($_SESSION['id']) &&($_SESSION['tipoUsuario'])==1){
//todo ok

}
else{
    echo"Pagina Prohibida. Inicie Sesion";
    exit();
}
*/

require '../functions.php/conection.php';
$c = conectar();
$sql = "select * from tipos;";

$tiposMartriz = mysqli_query($c, $sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
        img{
            width: 10%;
            height: 15%;
        }
        .calzadosGenerales {
            display: none;
        }

        #tituloCalzadosGenerales {
            display: none;
        }

        <?php
        if (isset($_POST['mostrarCalzadosGenerales'])) {
        ?>.calzadosGenerales {
            display: inline;
        }

        #tituloCalzadosGenerales {
            display: block;
        }

        <?php
        }
        ?>#formSubirStock {
            display: none;
        }

        <?php

        if (isset($_POST['subirStock'])) {
        ?>#formSubirStock {
            display: block;
        }

        <?php
        }
        ?>
    </style>
</head>

<body>
    <strong>
        <h1>Página de Administrador</h1>
    </strong>
    <h3>Agregar Calzados Generales</h3>
    <form> <br>
        ID: <input name="cal_id" type="number">
        <br>
        TIPO:
        <select name="tipo_id"> <?php
                                while ($tipo = mysqli_fetch_assoc($tiposMartriz)) {
                                ?> <option value="<?php echo $tipo['tipo_id'] ?>"><?php echo $tipo['tipo_desc'] ?></option> <?php

                                                                                                                        }
                                                                                                                            ?>


        </select> <br>
        Genero: <select name="cal_gen" id="">
            <option value="M">Hombre</option>
            <option value="F">Mujer</option>
        </select>
        <br>
        Marca: <input name="cal_desc" type="text"> <br>

        Precio: <input name="cal_precio" type="number" step=0.01> <br>
        <input formaction="admin.php" formmethod="post" type="submit" value="Subir Calzado General">
    </form> <?php
            if (isset($_POST['cal_id'])) {
                require '../functions.php/subirProductoGeneral.php';
                subirProductoGeneral(conectar(), $id, $tipo, $marca, $precio, $genero);
            }

            ?>
    <form>
        <input type="text" name="mostrarCalzadosGenerales" style="display: none;">
        <input formaction="admin.php" formmethod="post" type="submit" value="Ver todos los Calzados Generales">
    </form>


    <form>
        <input type="text" name="subirStock" style="display: none;">
        <input formaction="admin.php" formmethod="post" type="submit" value="Subir Stock">
    </form>





    <!-- Parte 2-->
    <br><br><br><br><br>
    <h2 id="tituloCalzadosGenerales">Todos Los Calzados Generales</h2>
    <?php
    $conectionCalzadosSelect = conectar();
    $calzadosGenerales = mysqli_query($conectionCalzadosSelect, "select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;");

    while ($calzadoGeneral = mysqli_fetch_assoc($calzadosGenerales)) {

    ?> <br> <br><br><br>
        <form class="calzadosGenerales" style="border:1px solid black; width:30%;">
            <h3>id:</h3><input readonly value="<?php echo $calzadoGeneral['cal_id'];   ?>" type="number">
            <h4>Genero:</h4> <input readonly value="<?php echo $calzadoGeneral['cal_gen'];    ?>" type="text">
            <h4>Marca:</h4> <input readonly value="<?php echo $calzadoGeneral['cal_desc'];    ?>" type="text">
            <h4>Tipo:</h4> <input readonly value="<?php echo $calzadoGeneral['tipo_desc']  ?>" type="text">

        </form> <?php
            }



            //PARTE 3 ABAJO

                ?>






    <form id="formSubirStock">
        <h6>Calzado General</h6>
        <select name="cal_id2" id="">
            <?php
            $conectionCalzadosSelect = conectar();
            $calzadosGenerales = mysqli_query($conectionCalzadosSelect, "select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;");

            while ($calzado = mysqli_fetch_assoc($calzadosGenerales)) {
            ?>
                <option value="<?php echo $calzado['cal_id'] ?>"><?php echo "Marca:" . $calzado['cal_desc'] . "- Marca:" . $calzado['tipo_desc'] . "-Genero: " . $calzado['cal_gen'];  ?></option>
            <?php
            }           ?>

        </select> <br>
        Color
        <select name="color_id" id="">
            <option style="color:red" value=1>Rojo</option>
            <option style="color:green" value=2>Verde</option>
            <option style="color:blue" value=3>Azul</option>
            <option style="color:black" value=4>Negro</option>
            <option style="color:blueviolet" value=5>Violeta</option>
            <option style="color:brown" value=6>Marron</option>
        </select>
        <br>
        talle 35:<input value=0 type="number" name="n_35" id=""><br>
        talle 36:<input value=0 type="number" name="n_36" id=""><br>
        talle 37:<input value=0 type="number" name="n_37" id=""><br>
        talle 38:<input value=0 type="number" name="n_38" id=""><br>
        talle 39:<input value=0 type="number" name="n_39" id=""><br>
        talle 40:<input value=0 type="number" name="n_40" id=""><br>
        talle 41:<input value=0 type="number" name="n_41" id=""><br>
        talle 42:<input value=0 type="number" name="n_42" id=""><br>
        talle 43:<input value=0 type="number" name="n_43" id=""><br>
        talle 44:<input value=0 type="number" name="n_44" id=""><br>
        talle 45:<input value=0 type="number" name="n_45" id=""><br>
        Imagen Url: <input name="stock_img" type="text">
        <input type="submit" value="Subir Stock" formaction="admin.php" formmethod="post">
    </form>

    <?php

    if (isset($_POST['n_35'])) {
        require '../functions.php/subirStock.php';
        subirStock($c, $cal_id2, $color_id2, $n_35, $n_36, $n_37, $n_38, $n_39, $n_40, $n_41, $n_42, $n_43, $n_44, $n_45,$stock_img);
    }



    //PARTE 4 ABAJO



    $conexionMostrarStock= conectar();
    $sqlMostrarStock="select  s.stock_img, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, s.stock_id,s.estado_id,s.cal_id,s.color_id,s.n_35,s.n_36,s.n_37,s.n_38,s.n_39,s.n_40,s.n_41,s.n_42,s.n_43,s.n_44,s.n_45 from calzados c right join stock s on c.cal_id = s.cal_id;";
    $matrizStock=mysqli_query($conexionMostrarStock,$sqlMostrarStock);

    while($stockIndividual=mysqli_fetch_assoc($matrizStock)){
        ?>
        <br><br><br><br>
        <h5>Id del stock:<?php echo $stockIndividual['stock_id'] ?> </h5>
        <h5>Marca:<?php echo $stockIndividual['cal_desc'] ?> </h5>
        <?php
        switch($stockIndividual['color_id']){
            case 1:
                echo "<h5>Color: Rojo</h5>";
            break;

            case 2:
                echo "<h5>Color:Verde</h5>";
            break;

            case 3:
                echo "<h5>Color:Azul</h5>";
            break;

            case 4:
                echo "<h5>Color:Negro</h5>";
            break;

            case 5:
                echo "<h5>Color:Violeta</h5>";
            break;

            case 6:
                echo "<h5>Color:Marron</h5>";
            break;
        }



        switch($stockIndividual['tipo_id']){
            case 1:
                echo "<h5>Tipo: Deportivo</h5>";
            break;

            case 2:
                echo "<h5>Tipo: De Vestir</h5>";
            break;

            
        }
        ?>
        <h5>Precio:<?php echo $stockIndividual['cal_precio']  ?></h5>
        <h5>Genero:<?php echo $stockIndividual['cal_gen']  ?></h5>
 
        <img src='<?php echo $stockIndividual['stock_img'];?>' alt="Imagen de zapatos">

        <h5>STOCK DISPONIBLE</h6>
        <h5>Talle 35: <?php echo $stockIndividual['n_35']?></h6>
        <h5>Talle 36: <?php echo $stockIndividual['n_36']?></h5>
        <h5>Talle 37: <?php echo $stockIndividual['n_37']?></h5>
        <h5>Talle 38: <?php echo $stockIndividual['n_38']?></h5>
        <h5>Talle 39: <?php echo $stockIndividual['n_39']?></h5>
        <h5>Talle 40: <?php echo $stockIndividual['n_40']?></h5>
        <h5>Talle 41: <?php echo $stockIndividual['n_41']?></h5>
        <h5>Talle 42: <?php echo $stockIndividual['n_42']?></h5>
        <h5>Talle 43: <?php echo $stockIndividual['n_43']?></h5>
        <h5>Talle 44: <?php echo $stockIndividual['n_44']?></h5>
        <h5>Talle 45: <?php echo $stockIndividual['n_45']?></h5>

        <?php 
    }   
    ?>


    






</body>

</html>