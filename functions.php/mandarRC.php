<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* PEGAR DE ACA PARA ABAJO */

#gifCarga{
    width:30% ;
    height:80% ;
    background-size: 100%;
    position: relative;
    right:15%;
}
 #NombrePagina{
    position: relative;
    left: 70px;
    font-size:2.5rem ;
    
 }

 #botonLogout{
    position: relative;
    left: 25%;
  }
 
#aboutOf{
    position: relative;
    top: 450px;
    display: none;
    z-index: 100;
 }
 .containerComponent{
    display: flex;
    justify-content: center;
 }
/*   
 -TO DELETE THE POSITION OF LOGOUT IMAGE
 -TO DELETE THE SIZES OF THE IMAGE OF THE CHARGE SCREEN  */
/* MOBILE */
    @media(max-width:480px){
        #gifCarga{
            /* width: ;
            height: ; */
        }
        
   }
   
   /* EXTRA SMALL DEVICES */
   @media(min-width:481px) and (max-width:767px){
         
      
   }
   /* SMALL TABLETS */
   @media(min-width:768px) and (max-width:991px){
    
   }
   /* LARGE TABLET / LAPTOPS */
   @media(min-width:992px) and (max-width:1199px){
    
   }











    </style>

<body id="bodyElement">
    <div id="testElement"  style="position:fixed;visibility: visible;height: 100vh; width: 100vw;  display: flex; justify-content: center;align-items: center;background-color:black;">
        <div id="gifCarga" style=" background-image:url('img/load.gif'); background-position: 100%; background-repeat: no-repeat; border: 1px solid black;left:5%;">

        </div>
    </div>
    <form style="display:none">
        <input type="number" name="id" value="<?php echo $idStock  ?>" id=""> <br>
        <input type="number" name="talle" value="<?php echo $tallePedido  ?>" id="">
        <input type="number" name="affectedRowsCreateReserve" value="<?php echo $_POST["affectedRowsCreateReserve"]  ?>" id=""> <br>
        <input type="number" name="affectedForUpdateStock" value="<?php echo $_POST["affectedForUpdateStock"]  ?>" id="">
        <input type="submit" id="submitElement" value="Enviar" formaction="../reservaCompletada.php" formmethod="POST">
    </form>

    <script src="../js/updateStock.js"></script>
</body>
</html>