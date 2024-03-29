<?php

    function ShoeCard($id,$precio,$marca,$tipo,$imgUrl ,$talle,$color,$genero){
        ?>
        
            <style>
                .price{
                    color:red;
                    position: relative;
                    left:20%;
                    font-size:1.2rem;
                }
                    .containerrr{
                    border: 1px solid black;
                    width: 150px;
                    height:40%;
                    display:flex;
                    flex-direction:column;
                    align-items:center;
                    background-color:var(--c5);
                    border-radius:10px;
                    box-shadow:black 10px 10px 10px;
                    margin:3%;
                    min-height:300px;
                            }
                    .containerrr:hover{
                        transition:1s;
                        transform: translate(15px,15px);
                        box-shadow:none;
                    }
                    .imagenMuestra{
                    width: 90%;
                    height:50%;
                    border:1px solid black
                    }
                    .inputt{
                        width: 80%;
                        height:15px;
                        border:none;
                        background:none;
                    }
                    .formCard{
                        display:flex;
                        flex-direction:column;
                        align-items:center;
                        
                        
                    }

                    .marcaFormCard{
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                        font-size: 1.5rem;
                    }

                    .tipoFormCard{
                        font-family: 'Arial Narrow', Arial, sans-serif;
                        font-size: 1.2rem;
                    }

                    .tallesFormCard{
                        position: relative;
                        left:10%;
                    }
                    .buttomFormCard{
                        border-radius:25px;
                        background-color:black;
                        color:var(--c1);
                        height: 20px;
                        margin-top:5px;
                    }

                    .buttomFormCard:hover{
                        background-color:violet;
                    }

            </style>
        
            <div class="containerrr">
                
                <img src="<?php echo $imgUrl?>" class="imagenMuestra"  alt="Imagen del zapato">
            <form class="formCard" action="./functions.php/eliminarReserva.php" method="post">
                    <input style="display:none;" class="inputt" type="number" value="<?php echo $id ?>" name="id" readonly>
                    <input class="inputt marcaFormCard" value="<?php echo $marca ?>" type="text"readonly>
                    
                    <input style="position:relative;
                    top:5px;" class="inputt tipoFormCard" value="<?php echo $tipo ?>" type="text" readonly>
                    <p style="display:none;">Genero:<input style="position:relative;
                    top:5px;" class="inputt tipoFormCard" value="<?php echo $genero ?>" type="text" readonly></p>
                    <p style="position:relative;
                    top:6px;">Talle: <input  class="inputt tipoFormCard" value="<?php echo $talle ?>" type="text" readonly></p>
                    <p style="position:relative;
                    top:6px;">Genero: <input  class="inputt tipoFormCard" value="<?php echo $genero ?>" type="text" readonly></p>
                    <p style="position:relative;
                    top:5px;" class="price" >$<?php echo $precio ?></p>
                    
                        <?php
                        $isTalle=true;
                        if($isTalle){ ?>
                    <input type="submit" class="buttomFormCard" value="Cancelar" >
                        <?php }  else{
                            echo "<h4>No Disponible</h4>";
                        }?> 

                    </form>
            </div>
        
            
        
        <?php
    }
    /*
    $id=4;
   $precio=56.32;
   $marca="Nike";
   $tipo="Deportiva";
   $tallesDisponibles=[35,36,37,0,54,23,9,0,54,23,0];
   $color=1;
   $imgUrl="https://media.solodeportes.com.ar/media/catalog/product/cache/7c4f9b393f0b8cb75f2b74fe5e9e52aa/z/a/zapatillas-nike-vision-low-canvas-roja-510010db7779600-1.jpg";
    ShoeCard($id,$precio,$marca,$tipo,$imgUrl,$tallesDisponibles,$color);
*/
?>