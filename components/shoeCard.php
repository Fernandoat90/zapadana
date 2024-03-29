<?php

    function ShoeCard($id,$precio,$marca,$tipo,$imgUrl,$tallesDisponibles,$color){
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
                    box-shadow:black 10px 10px;
                    min-height:300px;
                    margin:3%;
                            }
                    .containerrr:hover{
                        transition:1s;
                        transform: translate(15px,15px);
                        box-shadow:none;
                    }
                    .imagenMuestra{
                    width: 90%;
                    height:50%;
                    
                    }
                    .inputt{
                        width: 80%;
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
                        font-size:1rem;
                    }

                    .buttomFormCard:hover{
                        background-color:violet;
                    }

            </style>
        
            <div class="containerrr">
                
                <img src="<?php echo $imgUrl?>" class="imagenMuestra"  alt="Imagen del zapato">
            <form class="formCard" action="./confirmarCompra.php" method="post">
                    <input style="display:none;" class="inputt" type="number" value="<?php echo $id ?>" name="id" readonly>
                    
                    <input class="inputt marcaFormCard" value="<?php echo $marca ?>" type="text"readonly>
                    
                    <input class="inputt tipoFormCard" value="<?php echo $tipo ?>" type="text" readonly>
                    <p class="price" >$<?php echo $precio ?></p>
                    
                    <p>Talles Disponibles:</p>
                    
                    <?php 
                        $noTallesDisponibles = true;
                        foreach($tallesDisponibles as $talle) {
                            if($talle > 0) {
                                $noTallesDisponibles = false;
                                break;
                            }
                        }
                    ?>
                    
                    
                    <select class="tallesFormCard" name="talle" <?php if($noTallesDisponibles){ ?> style="display:none;" <?php }   ?>> 
                    
                    <?php $isTalle=false; 
                    
                    if($tallesDisponibles[0]>0){ 
                        $isTalle=true; 
                        ?>
                        
                        <option value=35>35</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[1]>0){
                        $isTalle=true; 
                        ?>
                        <option value=36>36</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[2]>0){ 
                        $isTalle=true; 
                        ?>
                        <option value=37>37</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[3]>0){ 
                        $isTalle=true; 
                        ?>
                        <option value=38>38</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[4]>0){ 
                        $isTalle=true; 
                        ?>
                        <option value=39>39</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[5]>0){ 
                        $isTalle=true; 
                        ?>
                        <option value=40>40</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[6]>0){
                        $isTalle=true; 
                        ?>
                        <option value=41>41</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[7]>0){
                        $isTalle=true; 
                        ?>
                        <option value=42>42</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[8]>0){
                        $isTalle=true; 
                        ?>
                        <option value=43>43</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[9]>0){
                        $isTalle=true; 
                        ?>
                        <option value=44>44</option>
                    <?php } ?>
                    <?php if($tallesDisponibles[10]>0){
                        $isTalle=true; 
                        ?>
                        <option value=45>45</option>
                    <?php }
                    ?>
                    </select>
                    
                        <?php if($isTalle){ ?>
                    <input type="submit" class="buttomFormCard" value="Reservar" >
                        <?php }  else{
                            echo "<br><h4 style=color:red;>Sin Stock</h4>";
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