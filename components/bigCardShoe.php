<?php

    function bigCardShoe($precio,$marca,$tipo,$genero,$color){
        ?>
        <style>
            :root{
                --bp:1px solid Blue;
                --bf:1px solid black;
            }
            .bigCardShoeContainer{
                width:70%;
                height:600px;
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
                width: 80%;
                height:85%;
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
            width:80%;
            height:90%;
            background-color:yellow;
            padding-left:8%;
        }

        .bigCardShoePTexto{
            font-family: 'impact',cursive, sans-serif, Geneva, Tahoma, sans-serif;
            font-size:25px;
        
        }

        .bigCardShoePPrice{
            font-family:'impact';
            font-size:30px;
            color:red;
            position:relative;
            left:70%;
        }

        .bigCardShoeFormText{
            border:none;
            background:none;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif, Geneva, Tahoma, sans-serif;
            font-size:22px;
        }

        .bigCardShoeFormPrice{
            border:none;
            background:none;
            font-family:'impact';
            font-size:30px;
            color:red;
            
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
        }
        .bigCardShoeFormSubmit:hover{
            background-color:blueviolet;
        }
        </style>
        
        <div class="bigCardShoeContainer" >
                <div class="bigCardShoeImage">
                    <img class="bigCardShoeDivImage" src="https://img.freepik.com/fotos-premium/zapatilla-roja-aislado-sobre-fondo-blanco_185193-64054.jpg" alt="">
                </div>
                <div class="bigCardShoeInfo">
                    <form class="bigCardShoeForm" >
                        <p class="bigCardShoePTexto" >Marca: <input class="bigCardShoeFormText" type="text" value="<?php echo $marca ?>"></p>
                        <p class="bigCardShoePTexto" >Tipo: <input class="bigCardShoeFormText" type="text" value="<?php echo $tipo ?>"></p>
                        <p class="bigCardShoePTexto" >Genero: <input class="bigCardShoeFormText" type="text" value="<?php echo $genero ?>"></p>
                        <p class="bigCardShoePTexto" >Color: <input class="bigCardShoeFormText" type="text" value="<?php echo $color ?>"></p>
                        <p class="bigCardShoePPrice" >$<input class="bigCardShoeFormPrice"  type="number" name="<?php echo $precio ?>" value=0.01 step=0.01 id=""></p>
                        <input class="bigCardShoeFormSubmit" type="submit">
                    </form>
                </div>
        </div>
        
        <?php
    }

bigCardShoe(13.43,"Nike","De vestir","Femenino","Rojo");

?>