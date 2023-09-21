<?php
    require "../functions.php/seguridadAdmin.php";
   
    $stock_id=$_POST['stock_id'];
    $cal_id = $_POST['cal_id'];
    $cal_precio=$_POST['cal_precio'];
    $color_id = $_POST['color_id'];
    $estado_id=$_POST['estado_id'];
    $n_35 = $_POST['n_35'];
    $n_36 = $_POST['n_36'];
    $n_37 = $_POST['n_37'];
    $n_38 = $_POST['n_38'];
    $n_39 = $_POST['n_39'];
    $n_40 = $_POST['n_40'];
    $n_41 = $_POST['n_41'];
    $n_42 = $_POST['n_42'];
    $n_43 = $_POST['n_43'];
    $n_44 = $_POST['n_44'];
    $n_45 = $_POST['n_45'];
    $stock_img = $_POST['stock_img'];
    require '../functions.php/actualizarStock.php';
    require '../functions.php/conection.php';
    
        

        $conectionCalzadosSelect = conectar();
        mysqli_query(conectar(),"update calzados set cal_precio=$cal_precio where cal_id=$cal_id;");
        $calzadosGenerales = mysqli_query($conectionCalzadosSelect, "select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;");

        if (isset($_POST['ActualizarStock'])) {
            ActualizarStock(conectar(), $cal_id, $color_id, $n_35, $n_36, $n_37, $n_38, $n_39, $n_40, $n_41, $n_42, $n_43, $n_44, $n_45,$stock_img,$stock_id);}

    if (isset($_POST['enviarAFormStock'])) {
    ?>
     <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/logout.css">
    <style>
             *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.botonSubmit{
    border-radius:20px;
    display:flex;
    justify-content:center;
    width:9%;
    height:4%;
    cursor:pointer;
}

button:hover{
    background-color:red;
    color:white;
}

.botonSubmit:hover{
    background-color:red;
    color:white;
}

.inputBasics{
        border-radius:25px;
        width:15%;
        height:25px;
        padding-left:1%;
    }
    #cabecera{
        width:100%;
        height:10vh;
        border:1px solid black;
       
    }
    </style>
    
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;z-index:9;">
        <div style="width: 30%;height: 50%; background-image:url('../img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;position:relative;right:20%;">

        </div>
    </div> 
    
    <form >
        
        
    <div id="cabecera">
            <div id="elementoUno" class="elementCabecera"><a id="botonAtras" title="Home" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;background-image: url('../img/prueba-logo4.png');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;
                        z-index:2;position:relative;left:30%;" href="./admin.php"></a></div>
            <div class="elementCabecera"><h1>Administrador</h1></div>
            <div id="elementoTres" class="elementCabecera"><a id="botonLogout" title="Cerrar Sesion" style=" width:100px;height:60px;display:flex;justify-content:center;align-items:center;color:white;position:relative;" href="../functions.php/logout.php"></a></div>
    </div>
            
        
            <input style="display: none;"  type="number" value="<?php echo $stock_id ?>" name="stock_id"> <br> <br>
            <p style="color:white">Calzado<select required name="cal_id" id="">
            <?php
            while ($calzado = mysqli_fetch_assoc($calzadosGenerales)) {
            ?>
                <option  <?php if($calzado['cal_id']==$cal_id){ echo "selected";} ?> value="<?php echo $calzado['cal_id'] ?>"><?php echo "Marca:" . $calzado['cal_desc'] . "- Marca:" . $calzado['tipo_desc'] . "-Genero: " . $calzado['cal_gen'];  ?></option>
                
            <?php
            }           ?>
            
        </select></p> <br>
        

            <p style="color:white;"><br>Url de la imagen:<input required  class="inputBasics" type="text" value="<?php echo $stock_img ?>" name="stock_img"></p> <br>
            
            <p style="color:white">Cal_id :</p> <input class="inputBasics" name="cal_id" type="number" step=1 value=<?php echo $cal_id; ?>> <br>
        
            <p style="color:white">Precio:</p> <input class="inputBasics" name="cal_precio" type="number" step=0.01 value=<?php echo $cal_precio; ?>> <br>

            <input  class="inputBasics" style="display: none;" type="text" value="<?php echo $estado_id ?>" name="estado_id"> <br>


            <input class="inputBasics" type="text"style="display:none;" name="ActualizarStock"> <br>
            
            <p style="color:white; margin-bottom:2%;">Color:<input style="display:none;" type="number" value="<?php echo $color_id ?>" name="color_id">
                <select required name="color_id" id="">
                    <option style="color: red;" <?php if($color_id==1){ echo "selected";} ?> value=1>Rojo</option>
                    <option style="color: green;"  <?php if($color_id==2){ echo "selected";} ?> value=2>Verde</option>
                    <option style="color: blue;" <?php if($color_id==3){ echo "selected";} ?> value=3>Azul</option>
                    <option  <?php if($color_id==4){ echo "selected";} ?> value=4>Negro</option>
                    <option style="color: blueviolet;" <?php if($color_id==5){ echo "selected";} ?> value=5>Violeta</option>
                    <option style="color: brown;" <?php if($color_id==6){ echo "selected";} ?> value=6>Marron</option>
                </select>
                </p>
            <p style="color:white;" >Talle 35:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_35 ?>" name="n_35"></p> <br>
            
            <p style="color:white;" >Talle 36:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_36 ?>" name="n_36"></p> <br>
            
            <p style="color:white;" >Talle 37:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_37 ?>" name="n_37"></p> <br>
            
            <p style="color:white;" >Talle 38:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_38 ?>" name="n_38"></p> <br>
            
            <p style="color:white;" >Talle 39:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_39 ?>" name="n_39"></p> <br>
            
            <p style="color:white;" >Talle 40:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_40 ?>" name="n_40"></p> <br>
            
            <p style="color:white;" >Talle 41:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_41 ?>" name="n_41"></p> <br> 
            
            <p style="color:white;" >Talle 42:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_42 ?>" name="n_42"></p> <br>
            
            <p style="color:white;" >Talle 43:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_43 ?>" name="n_43"></p> <br>
            
            <p style="color:white;" >Talle 44:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_44 ?>" name="n_44"></p> <br>
            
            <p style="color:white;" >Talle 45:<input max=99 required min=0 class="inputBasics" type="number" value="<?php echo $n_45 ?>" name="n_45"></p> <br>
            
            <input class="botonSubmit" type="submit"  formaction="./admin2.php" formmethod="post"  value="Editar Stock">
        </form> <?php }
?>

<form>
    <input class="botonSubmit" type="submit" value="Home" formaction="admin.php" formmethod="get">
</form>
<script src="../js/chargeFile.js"></script>