<?php



function ActualizarStock($c, $cal_id, $color_id, $n_35, $n_36, $n_37, $n_38, $n_39, $n_40, $n_41, $n_42, $n_43, $n_44, $n_45, $stock_img,$stock_id)
{
    $conection=$c;
    $sql="update stock set cal_id = $cal_id, color_id = $color_id, stock_img='$stock_img', n_35=$n_35, n_36=$n_36, n_37=$n_37, n_38=$n_38, n_39=$n_39, n_40=$n_40, n_41=$n_41, n_42=$n_42, n_43=$n_43, n_44=$n_44, n_45=$n_45 where stock_id = $stock_id;";

    mysqli_query($conection,$sql);

    if(mysqli_affected_rows($conection)>0){
        header("location:./admin.php?stockActualizado=1");
    }
    else{
        header("location:./admin.php?stockActualizado=1");
    }
}
