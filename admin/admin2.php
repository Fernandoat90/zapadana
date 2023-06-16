<?php
    $stock_id=$_POST['stock_id'];
    $cal_id = $_POST['cal_id'];
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
        $calzadosGenerales = mysqli_query($conectionCalzadosSelect, "select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;");

        if (isset($_POST['ActualizarStock'])) {
            ActualizarStock(conectar(), $cal_id, $color_id, $n_35, $n_36, $n_37, $n_38, $n_39, $n_40, $n_41, $n_42, $n_43, $n_44, $n_45,$stock_img,$stock_id);}

    if (isset($_POST['enviarAFormStock'])) {
    ?>
    
    <form >
            <input style="display: none;"  type="number" value="<?php echo $stock_id ?>" name="stock_id"> <br> <br>
            <select name="cal_id" id="">
            <?php
            while ($calzado = mysqli_fetch_assoc($calzadosGenerales)) {
            ?>
                <option  <?php if($calzado['cal_id']==$cal_id){ echo "selected";} ?> value="<?php echo $calzado['cal_id'] ?>"><?php echo "Marca:" . $calzado['cal_desc'] . "- Marca:" . $calzado['tipo_desc'] . "-Genero: " . $calzado['cal_gen'];  ?></option>
                
            <?php
            }           ?>
            
        </select> <br>

            Url de la imagen:<input type="text" value="<?php echo $stock_img ?>" name="stock_img"> <br>

            <input style="display: none;" type="text" value="<?php echo $estado_id ?>" name="estado_id"> <br>


            <input type="text"style="display:none;" name="ActualizarStock"> <br>
            
            Color:<input type="number" value="<?php echo $color_id ?>" name="color_id"> <br>
                <select name="color_id" id="">
                    <option style="color: red;" <?php if($color_id==1){ echo "selected";} ?> value=1>Rojo</option>
                    <option style="color: green;"  <?php if($color_id==2){ echo "selected";} ?> value=2>Verde</option>
                    <option style="color: blue;" <?php if($color_id==3){ echo "selected";} ?> value=3>Azul</option>
                    <option  <?php if($color_id==4){ echo "selected";} ?> value=4>Negro</option>
                    <option style="color: blueviolet;" <?php if($color_id==5){ echo "selected";} ?> value=5>Violeta</option>
                    <option style="color: brown;" <?php if($color_id==6){ echo "selected";} ?> value=6>Marron</option>
                </select>
            
            Talle 35:<input type="number" value="<?php echo $n_35 ?>" name="n_35"> <br>
            
            Talle 36:<input type="number" value="<?php echo $n_36 ?>" name="n_36"> <br>
            
            Talle 37:<input type="number" value="<?php echo $n_37 ?>" name="n_37"> <br>
            
            Talle 38:<input type="number" value="<?php echo $n_38 ?>" name="n_38"> <br>
            
            Talle 39:<input type="number" value="<?php echo $n_39 ?>" name="n_39"> <br>
            
            Talle 40:<input type="number" value="<?php echo $n_40 ?>" name="n_40"> <br>
            
            Talle 41:<input type="number" value="<?php echo $n_41 ?>" name="n_41"> <br> 
            
            Talle 42:<input type="number" value="<?php echo $n_42 ?>" name="n_42"> <br>
            
            Talle 43:<input type="number" value="<?php echo $n_43 ?>" name="n_43"> <br>
            
            Talle 44:<input type="number" value="<?php echo $n_44 ?>" name="n_44"> <br>
            
            Talle 45:<input type="number" value="<?php echo $n_45 ?>" name="n_45"> <br>
            
            <input type="submit"  formaction="./admin2.php" formmethod="post"  value="Editar Stock">
        </form> <?php }
?>

<form>
    <input type="submit" value="Volver a la página principal" formaction="admin.php" formmethod="get">
</form>