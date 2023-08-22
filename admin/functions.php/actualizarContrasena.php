<?php
    require './conection.php';
    require './devolverIdCorreo.php';
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $mail=$_POST['mail'];
    if($pass==$pass2){
        $conection=conectar();
        $id=devolverIdCorreo(conectar(),$mail);
        //$id= mysqli_query($conectar(),"select * from usu_mail='$mail';");
        //$registro=mysqli_fetch_assoc($id);
        //echo $registro['usu_id'];
        $sql="update usuarios set usu_pass='$pass' where usu_id=$id;";
        mysqli_query($conection,$sql);
        if(mysqli_affected_rows($conection)>0){
            header("location:../login.php?contrasenaActualizada");
        }
        else{
            header("location:../restablecerContrasena2.php?errorAlActualizar&mail=".$mail);
            
        }
    }
    else{
    
    header("location:../restablecerContrasena2.php?contrasenasNoIguales&mail=".$mail);
    }
    
?>