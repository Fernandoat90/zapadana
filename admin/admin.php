<?php
require "../functions.php/seguridadAdmin.php";

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
    <link rel="stylesheet" href="../css/imagenesStocksUrl.css">
    <title>ZapaDana</title>



    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box; 
    /*--c1:#03543B;*/
    /*c1= cabecera y letras de botones*/
    --c1:#eb9c88;
    /*--c2:#9C3A21;*/
    /*c2=body*/
    --c2:#e6f0ed;
    /*--c3:#FC8668;*/
    --c3:#eb9c88;
    --c4:#5FE8BD;
    --c5:#B2C9B2;
}



button{
    border-radius:20px;
    display:flex;
    justify-content:center;
    width:150px;
    height:4%;
    cursor:pointer;
    margin-left:10%;
    
}


#contenedorImagenesUrlStock{
    display:flex;
    flex-direction:row; 
    justify-content:center;
    align-items:center;
    width:700px; 
    height:300px;
    border:1px solid black;
    flex-wrap:wrap;
    position:relative;
    left:500px;
    bottom:420px;
    background-color:var(--c3);
}
.botonSubmit{
    border-radius:20px;
    /*display:flex;*/
    /*justify-content:center;*/
    width:150px;
    height:30px;
    cursor:pointer;
    margin-left:10%;
    background-color:red;
    color:white;
}

button:hover{
    background-color:var(--c4);
    color:var(--c1);
}

.botonSubmit:hover{
    background-color:var(--c3);
    color:var(--c1);
}

body{
    background-color:yellow;
    
}
    .inputBasics{
        border-radius:25px;
        width:15%;
        height:25px;
        padding-left:1%;
    }
    .inputBasicsWidther{
        
        border-radius:25px;
        width:60%;
        height:25px;
        padding-left:1%;
    }
    .inputBasicsMinWidther{
        
        border-radius:25px;
        width:20%;
        height:25px;
        padding-left:4%;
    }
    #cabecera{
        width:100%;
        height:10vh;
        border:1px solid black;
        background-color:white;
    }

        .border{
            border:1px solid black;
            border-radius:25px;
        }
        img{
            width: 40%;
            height: 50%;
            border-radius:200px;
            align-items:center;
            justify-items:center;
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

        if (isset($_POST['mostrarTodosLosStocks'])) {//VFBERHARGARGAGAE
            ?>
            
    
            <?php
            }
            
        ?>



    </style>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/logout.css">
</head>

<body style="overflow-x:hidden;">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div style="width: 30%;height: 50%; background-image:url('../img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;position:relative;right:20%;">

        </div>
    </div> 
    <div id="cabecera">
            <div id="elementoUno" class="elementCabecera"><a id="botonAtras" title="Home" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;background-image: url('../img/prueba-logo4.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;position:relative;left:30%;" href="./admin.php"></a></div>
            <div class="elementCabecera"><h1>Administrador</h1></div>
            <div id="elementoTres" class="elementCabecera"><a id="botonLogout" title="Cerrar Sesion" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;" href="../functions.php/logout.php"></a></div>
    </div>
    <div style="margin-left:10%;">
    
    <main>
    
     <?php
            if(isset($_GET['stockActualizado'])){
                if($_GET['stockActualizado']==1){
                    echo "<h2 style='position:relative;right:5%;text-align:center;' id=resp>Stock Actualizado</h2>";
                }
                else{
                    echo "<h2 style='position:relative;left:6%;' id=resp>Stock no actualizado</h2>";
                }
            }
            
            if (isset($_POST['agregandoUnCalzadoGeneral'])) {
                
                require '../functions.php/subirProductoGeneral.php';
                subirProductoGeneral(conectar(), $tipo, $marca, $precio, $genero);
            }
            if (isset($_POST['n_35'])) {
                require '../functions.php/subirStock.php';
                subirStock($c, $cal_id2, $color_id2, $n_35, $n_36, $n_37, $n_38, $n_39, $n_40, $n_41, $n_42, $n_43, $n_44, $n_45,$stock_img);
            }

            ?>
            <script>
                document.getElementById("resp").style.display = "block";
                
                setTimeout(function(){
                    document.getElementById("resp").style.display = "none";
                     }, 3000);
            </script>
   
    <button style="margin-top:20px;display: inline-block;width: 120px; height: 50px;" id="agregarCalzadosGeneralesssBoton">
            Agregar Calzados
     </button>
     
    <button style="display: inline-block;width: 120px; height: 50px;"  id="mostrarCalzadosGeneralessss">Ver todos los calzados generales</button>


    <button id="botonSubirStockk" style="display: inline-block;width: 120px; height: 50px;">
            Agregar Stock
    </button>


  <button id="botomStocks" style="display: inline-block;width: 120px; height: 50px;">
            Ver todos los Stocks
    </button>

    </div>
    
    <div style="display:flex;justify-content:start;width:100%;align-items:center;">
    
    <form style="border:1px solid black;width:20%;background-color:var(--c4);border-radius:10px;position:relative;top:16px;left:20px;" id="agregarCalzadosGeneralesss"> <br>
    <h2 >Agregar Calzados Generales</h2> <br>
        <input type="text" name="agregandoUnCalzadoGeneral" style="display:none;">
        <br>
        TIPO:
        <select required name="tipo_id"> <?php
                                while ($tipo = mysqli_fetch_assoc($tiposMartriz)) {
                                ?> <option value="<?php echo $tipo['tipo_id'] ?>"><?php echo $tipo['tipo_desc'] ?></option> <?php

                                                                                                                        }
                                                                                                                            ?>


        </select> <br>
        Genero: <select required name="cal_gen" id="">
            <option value="M">Hombre</option>
            <option value="F">Mujer</option>
        </select>
        <br>
        Marca: <input required class="inputBasicsWidther" name="cal_desc" type="text"> <br>

        Precio: <input required class="inputBasicsWidther" name="cal_precio" type="number" step=0.01> <br>
        <input class="botonSubmit" formaction="admin.php" formmethod="post" type="submit" value="Subir Calzado General">
    </form>
    </div>
    <!-- Parte 2-->
    <br><br><br><br><br>
    <h2 style="display:none;color:black;text-align:center;" id="tituloCalzadosGenerales">Todos Los Calzados Generales</h2>
    <div id="calzadosGenerales" style="display:none;  flex-wrap:wrap;justify-content:center;">
    <?php
    $conectionCalzadosSelect = conectar();
    $calzadosGenerales = mysqli_query($conectionCalzadosSelect, "select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;");

    while ($calzadoGeneral = mysqli_fetch_assoc($calzadosGenerales)) {

    ?>
    
    <br> <br><br><br>
        <form class="calzadosGenerales border" style="border:1px solid black; width:30%; height:100%; display:flex;flex-direction:column;justify-content:center;align-items:center;background-color:var(--c3);">
            
            <h3 >id:</h3><input class="inputBasics centrarSacarBorde" readonly value="<?php echo $calzadoGeneral['cal_id'];   ?>" type="number">
            <h4>Genero:</h4> <input class="inputBasics centrarSacarBorde" readonly value="<?php echo $calzadoGeneral['cal_gen'];    ?>" type="text">
            <h4>Marca:</h4> <input class="inputBasics centrarSacarBorde" readonly value="<?php echo $calzadoGeneral['cal_desc'];    ?>" type="text">
            <h4>Tipo:</h4> <input class="inputBasics centrarSacarBorde" readonly value="<?php echo $calzadoGeneral['tipo_desc']  ?>" type="text">

        </form> 
        
        <?php
            } ?>

</div>
<?php
            //PARTE 3 ABAJO

                ?>






    <form style="border:1px solid black;width:25%;background-color:var(--c4);border-radius:10px;position:relative;left:20px;bottom:20px;" id="formSubirStock">
        <h2>Agregar Nuevo Stock</h2>
        <br><br>
        <h4>Calzado General</h4>
        <select name="cal_id2" id="">
            <?php
            $conectionCalzadosSelect = conectar();
            $calzadosGenerales = mysqli_query($conectionCalzadosSelect,/*"select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;"*/"select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id order by c.cal_id desc;");

            while ($calzado = mysqli_fetch_assoc($calzadosGenerales)) {
            ?>
                <option value="<?php echo $calzado['cal_id'] ?>"><?php echo "Marca:" . $calzado['cal_desc'] . "- Marca:" . $calzado['tipo_desc'] . "-Genero: " . $calzado['cal_gen'];  ?></option>
            <?php
            }           ?>

        </select> <br>
        Color
        <select required name="color_id" id="">
            <option style="color:red" value=1>Rojo</option>
            <option style="color:green" value=2>Verde</option>
            <option style="color:blue" value=3>Azul</option>
            <option style="color:black" value=4>Negro</option>
            <option style="color:blueviolet" value=5>Violeta</option>
            <option style="color:brown" value=6>Marron</option>
        </select>
        <br>
        talle 35:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_35" min=0 id=""><br>
        talle 36:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_36" min=0 id=""><br>
        talle 37:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_37" min=0 id=""><br>
        talle 38:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_38" min=0 id=""><br>
        talle 39:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_39" min=0 id=""><br>
        talle 40:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_40" min=0 id=""><br>
        talle 41:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_41" min=0 id=""><br>
        talle 42:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_42" min=0 id=""><br>
        talle 43:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_43" min=0 id=""><br>
        talle 44:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_44" min=0 id=""><br>
        talle 45:<input max=99 required class="inputBasicsMinWidther" value=0 type="number" name="n_45" min=0 id=""><br>
        Imagen Url: <input id="inputUrlStock" placeholder="URL de la imagen" required class="inputBasicsWidther" name="stock_img" type="text">
        <input class="botonSubmit" type="submit" value="Subir Stock" formaction="admin.php" formmethod="post">
    </form>
    
    <div id="contenedorImagenesUrlStock" style="display:none;">
        <button class="botonUrl" style="background-image:url('https://acdn.mitiendanube.com/stores/001/245/791/products/3821f8e5-532a-4704-8f8a-b8a31ab42f3e-f5af221623f8186b8716808642733440-640-0.jpg')">
        
        <button class="botonUrl" style="background-image:url('https://media.revistagq.com/photos/615dbcc7fb06b6008a72732b/1:1/w_800,h_800,c_limit/air-jordan-1-mid-green-yellow-.jpeg')">
        
        <button class="botonUrl" style="background-image:url('https://us.123rf.com/450wm/doomu/doomu1707/doomu170700057/83274882-nuevas-zapatillas-de-deporte-azules-sin-marca-de-f%C3%A1brica-del-dril-de-algod%C3%B3n-en-un-fondo-blanco.jpg')">
        
        <button class="botonUrl" style="background-image:url('https://imagenes.elpais.com/resizer/FtqCfBrZH71Wr63XFX9FN8FvEwo=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/S3H73SQL7BDJDDJYFKFMJKJLLQ.png')">
        
        <button class="botonUrl" style="background-image:url('https://http2.mlstatic.com/D_NQ_NP_769262-MLA49482431641_032022-W.jpg')">
        
        <button class="botonUrl" style="background-image:url('https://acdn.mitiendanube.com/stores/001/165/935/products/zapatillas-ringo-got-suela1-76c0c2b576fd15892615980187125103-640-0.jpg')">
    </div>

    <script src="../js/rellenarUrlStock.js"> </script>
    <?php

    



    //PARTE 4 ABAJO



    $conexionMostrarStock= conectar();
    $sqlMostrarStock="select  s.stock_img, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, s.stock_id,s.estado_id,s.cal_id,s.color_id,s.n_35,s.n_36,s.n_37,s.n_38,s.n_39,s.n_40,s.n_41,s.n_42,s.n_43,s.n_44,s.n_45 from calzados c right join stock s on c.cal_id = s.cal_id where s.estado_id=1;";
    $matrizStock=mysqli_query($conexionMostrarStock,$sqlMostrarStock); ?>
    <div style="display: none; " id="todosLosStocks">
    <h2 style="position:relative;left:48%;color:black;font-size:40px;">Stocks</h2>
        <div style="display:flex; flex-wrap:wrap;justify-content:center;">
        
    <?php
    while($stockIndividual=mysqli_fetch_assoc($matrizStock)){
        ?>
        <div   class="border " style="background-color:var(--c3);display:flex;flex-direction:row; width:35%; justify-content:center; align-items:center;height:250px;">
        <br><br><br><br>
        <div style="margen-left:4px;margin-right:4px;:border:1px solid black;background-color:yellow;">
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
        </div>
        <img style="order:-1" class="border" src='<?php echo $stockIndividual['stock_img'];?>' alt="Imagen de zapatos">
        <div style="border:1px solid black;background-color:yellow;margin-left:3px;" >
        <h5>STOCK DISPONIBLE</h6>
        <?php
            $haveTalle=false;
            if($stockIndividual['n_35']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 35: <?php echo $stockIndividual['n_35']?></h6>
           <?php }
        ?>
        <?php
            if($stockIndividual['n_36']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 36: <?php echo $stockIndividual['n_36']?></h6>
           <?php }
        ?>


<?php
            if($stockIndividual['n_37']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 37: <?php echo $stockIndividual['n_37']?></h6>
           <?php }
        ?>


<?php
            if($stockIndividual['n_38']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 38: <?php echo $stockIndividual['n_38']?></h6>
           <?php }
        ?>
        
        <?php
            if($stockIndividual['n_39']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 39: <?php echo $stockIndividual['n_39']?></h6>
           <?php }
        ?>


<?php
            if($stockIndividual['n_40']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 40: <?php echo $stockIndividual['n_40']?></h6>
           <?php }
        ?>

<?php
            if($stockIndividual['n_41']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 41: <?php echo $stockIndividual['n_41']?></h6>
           <?php }
        ?>

<?php
            if($stockIndividual['n_42']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 42: <?php echo $stockIndividual['n_42']?></h6>
           <?php }
        ?>


<?php
            if($stockIndividual['n_43']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 43: <?php echo $stockIndividual['n_43']?></h6>
           <?php }
        ?>


<?php
            if($stockIndividual['n_44']!=0){
                $haveTalle=true;
                ?>
                <h5>Talle 44: <?php echo $stockIndividual['n_44']?></h6>
           <?php }
        ?>

<?php
            if($stockIndividual['n_45']!=0){ $haveTalle=true;?>
            
                <h5>Talle 45: <?php echo $stockIndividual['n_45']?></h6>
           <?php }
           if(!$haveTalle){
            echo "<h6>No hay talles disponibles</h6>";
           }
        ?>
        </div>

        <form >
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['stock_id'] ?>" name="stock_id">

            <input style="display: none;" type="text" value="<?php echo $stockIndividual['stock_img'] ?>" name="stock_img">

            <input style="display: none;" type="text" value="<?php echo $stockIndividual['estado_id'] ?>" name="estado_id">

            <input style="display: none;" type="number" value="<?php echo $stockIndividual['cal_id'] ?>" name="cal_id">

            <input style="display: none;" type="text" name="enviarAFormStock">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['color_id'] ?>" name="color_id">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_35'] ?>" name="n_35">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_36'] ?>" name="n_36">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_37'] ?>" name="n_37">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_38'] ?>" name="n_38">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_39'] ?>" name="n_39">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_40'] ?>" name="n_40">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_41'] ?>" name="n_41">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_42'] ?>" name="n_42">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_43'] ?>" name="n_43">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_44'] ?>" name="n_44">
            
            <input style="display: none;" type="number" value="<?php echo $stockIndividual['n_45'] ?>" name="n_45">
            
            <input class="stockEsconder" type="submit"  formaction="./admin2.php" formmethod="post"  value="Editar Stock">
            <input class="stockEsconder" type="submit"  formaction="../functions.php/deleteStock.php" formmethod="post"  value="Eliminar">
        </form>
        </div>
        <br><br>

        <?php 
    } 
    ?>
    </div>
</div>
   



<script src="./../js/admin.js"></script>
<script src="./../js/admin2.js"></script>
<script src="./../js/admin3.js"></script>
<script src="./../js/admin4.js"></script>
<script src="../js/chargeFile.js"></script>
</main>
<br><br><br> <br><br>
<br><br><br> <br><br>
<br><br><br> <br><br><br> <br><br>
<br><br><br> <br><br>
<br><br><br> <br><br><br> <br><br>
<br><br><br> <br><br>
<br><br><br> 
</body>

</html>