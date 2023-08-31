<?php

    function bigCardShoe($id,$precio,$marca,$tipo,$genero,$color,$url,$talle){
        ?>
        <style>
            /* :root{
                --bp:none;
                --bf:1px solid black;
            }
            .bigCardShoeContainer{
                width:70%;
                height:520px;
                border:1px solid black;
                border-radius:25px;
                display:flex;
                flex-direction:row;
                background-color:var(--c4);
                min-width:650px;
                min-height:600px;
            }
            .bigCardShoeImage{
                border-right:1px solid black;
                width:45%;
                height:100%;
                display:flex;
                justify-content:center;
                align-items:center;
                background-color:;
            }
            .bigCardShoeDivImage{
                width: 90%;
                height:90%;
                border-radius:150px;
            }
            .bigCardShoeInfo{
                height:106%;
                width:54%;
                display:flex;
                justify-content:center;
                align-items:center;
            }

        .bigCardShoeForm{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:start;
            border:1px solid black;
            border-radius:50px; 
            width: 450px;
            height:470px;
            background-color:var(--c5);
            padding-left:8%;
        }

        .bigCardShoePTexto{
            font-family: 'impact',cursive, sans-serif, Geneva, Tahoma, sans-serif;
            font-size:25px;
            display:inline;
            margin-top:3%;
        
        }

        .bigCardShoePPrice{
            font-family:'impact';
            font-size:30px;
            color:red;
            position:relative;
            left:70%;
            display:inline;
        }

        .bigCardShoeFormText{
            border:none;
            background:none;
            font-family: 'impact', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif, Geneva, Tahoma, sans-serif;
            height:30px;
            width:100px;
            font-size:22px;
            overflow: visible;
        }

        

        .bigCardShoeFormPrice{
            border:none;
            background:none;
            font-family:'impact';
            font-size:30px;
            color:red;
            height:25px;
            
        }


        .bigCardShoeFormSubmit{
            border-radius:25px;
            background-color:red;
            height:50px;
            width:150px;
            color:white;
            position:relative;
            left:25%;
            cursor:pointer;
            font-size:20px;
        }
        .bigCardShoeFormSubmit:hover{
            background-color:blueviolet;
        }
        .bigCardShoeFormSubmitContainer{
            border:var(--bp);
            width: 100%;
            height:20%;  /*Si se necesita mas espacio dentro de la info achicar este height //
            display:flex;
            align-items:center;
            position: relative;
            
        }
        .bigCardShoeTarjetasInputs{
            height:25px;
            margin-left:10%;
        } */
        </style>
        
        <div class="bigCardShoeContainer" >
                <div class="bigCardShoeImage">
                    <img class="bigCardShoeDivImage" src="<?php echo $url?>" alt="">
                </div>
                <div class="bigCardShoeInfo">
                    <form class="bigCardShoeForm" action="./updateStock.php" method="post">
                        <input type="number" name="id" value=<?php echo $id; ?> style="display:none;">
                        <p class="bigCardShoePTexto" >Marca: <input class="bigCardShoeFormText" type="text" name="marca" readonly value="<?php echo $marca ?>"></p>
                        <p class="bigCardShoePTexto" >Tipo: <input class="bigCardShoeFormText" type="text" name="tipo" readonly value="<?php echo $tipo ?>"></p>
                        <p class="bigCardShoePTexto" >Genero: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $genero ?>"></p>
                        <p class="bigCardShoePTexto" >Talle: <input name="talle" class="bigCardShoeFormText" type="number"  step=1 readonly value="<?php echo $talle ?>"></p>
                        <p class="bigCardShoePTexto" >Color: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $color ?>"></p>
                        <p class="bigCardShoePPrice" >$<input class="bigCardShoeFormPrice"  type="number" readonly name="precio" value=<?php echo $precio ?> step=0.01 id=""></p>
                        <div class="bigCardShoeTarjetasContainer">
                                <p class="bigCardShoePTexto"> Numero de Tarjeta: <br><input class="bigCardShoeTarjetasInputs" min=1000000000000000 max=9999999999999999 type="number" placeholder="Numero de la tarjeta" step=1 required></p> <br>
                                <p class="bigCardShoePTexto"> Codigo de seguridad: <br><input  class="bigCardShoeTarjetasInputs" max=999 type="number" maxlength=4 placeholder="Codigo de seguridad" required></p>
                        </div>
                        <div class="bigCardShoeFormSubmitContainer">
                            <input value="Reservar" class="bigCardShoeFormSubmit" type="submit">
                        </div>
                        
                    </form>
                </div>
        </div>
        
        <?php
    }



?>