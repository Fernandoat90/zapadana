<?php
$_SESSION['stockSubido']=true;
$cal_id2=$_POST['cal_id2'];
$color_id2=$_POST['color_id'];
$n_35=$_POST['n_35'];
$n_36=$_POST['n_36'];
$n_37=$_POST['n_37'];
$n_38=$_POST['n_38'];
$n_39=$_POST['n_39'];
$n_40=$_POST['n_40'];
$n_41=$_POST['n_41'];
$n_42=$_POST['n_42'];
$n_43=$_POST['n_43'];
$n_44=$_POST['n_44'];
$n_45=$_POST['n_45'];
$stock_img=$_POST['stock_img'];

function subirStock($c,$cal_id,$color_id,$n_35,$n_36,$n_37,$n_38,$n_39,$n_40,$n_41,$n_42,$n_43,$n_44,$n_45,$stock_img){
    $conection=$c;
    $sql="insert into stock(estado_id,cal_id,color_id,n_35,n_36,n_37,n_38,n_39,n_40,n_41,n_42,n_43,n_44,n_45,stock_img) values(1,$cal_id,$color_id,$n_35,$n_36,$n_37,$n_38,$n_39,$n_40,$n_41,$n_42,$n_43,$n_44,$n_45,'$stock_img');";
    mysqli_query($conection,$sql);
    if(mysqli_affected_rows($conection)>0 && $_SESSION['stockSubido']==true){
        echo "<br> <br><h2 style:'color:white;'>Stock Subido</h2>";
    }
    else{
        echo "<h2 style:'color:white;'>Stock No Subido</h2>";
    }

}