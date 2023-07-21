<?php

    function bigCardShoe($precio,$marca,$tipo,$genero,$color){
        ?>
        <style>
            :root{
                --bp:none;
                --bf:1px solid black;
            }
            .bigCardShoeContainer{
                width:70%;
                height:500px;
                border:1px solid black;
                border-radius:25px;
                display:flex;
                flex-direction:row;
                background-color:deeppink;
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
                height:100%;
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
            height:450px;
            background-color:yellow;
            padding-left:8%;
        }

        .bigCardShoePTexto{
            font-family: 'impact',cursive, sans-serif, Geneva, Tahoma, sans-serif;
            font-size:25px;
            display:inline;
            margin-top:6%;
        
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
            height:30%;  /*Si se necesita mas espacio dentro de la info achicar este height */
            display:flex;
            align-items:end;
            position: relative;
            
        }
        </style>
        
        <div class="bigCardShoeContainer" >
                <div class="bigCardShoeImage">
                    <img class="bigCardShoeDivImage" src="https://img.freepik.com/fotos-premium/zapatilla-roja-aislado-sobre-fondo-blanco_185193-64054.jpg" alt="">
                </div>
                <div class="bigCardShoeInfo">
                    <form class="bigCardShoeForm" >
                        <p class="bigCardShoePTexto" >Marca: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $marca ?>"></p>
                        <p class="bigCardShoePTexto" >Tipo: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $tipo ?>"></p>
                        <p class="bigCardShoePTexto" >Genero: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $genero ?>"></p>
                        <p class="bigCardShoePTexto" >Color: <input class="bigCardShoeFormText" type="text" readonly value="<?php echo $color ?>"></p>
                        <p class="bigCardShoePPrice" >$<input class="bigCardShoeFormPrice"  type="number" readonly name="precio" value=<?php echo $precio ?> step=0.01 id=""></p>
                        <div class="bigCardShoeFormSubmitContainer">
                            <input value="Reservar" class="bigCardShoeFormSubmit" type="submit">
                        </div>
                        
                    </form>
                </div>
        </div>
        
        <?php
    }



?>