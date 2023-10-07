<?php
    $tipo=$_POST['tipo_id'];
    $marca=$_POST['cal_desc'];
    $precio=$_POST['cal_precio'];
    $genero=$_POST['cal_gen'];
    
    function subirProductoGeneral($c,$tipo,$marca,$precio,$genero){
    
        $conection=$c;
    
        $sql3="INSERT INTO calzados(cal_desc,cal_precio,cal_gen,tipo_id) VALUES ('$marca',$precio,'$genero',$tipo)";
    
        mysqli_query($c,$sql3);

        if(mysqli_affected_rows($conection)>0){
            echo "<h2 style='color:black;text-align:center;' id=resp>Precio/Fabrica del Calzado  fue Cargado</h2>";
             ?>
             <script>
                document.getElementById("resp").style.display = "block";
                
                setTimeout(function(){
                    document.getElementById("resp").style.display = "none";
                     }, 3000);
            </script>
            <?php
        }
    
        else{
        
                echo "<h2 style='color:red;text-align:center;' id=resp> ERROR EN LA CARGAR</h2>";
                
                ?>
             <script>
                document.getElementById("resp").style.display = "block";
                
                setTimeout(function(){
                    document.getElementById("resp").style.display = "none";
                     }, 3000);
            </script>
            <?php
    
            
        }
    }

    