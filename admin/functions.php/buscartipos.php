<?php
class Tipos{
    public $id;
    public $description;

    function __construct($id, $description) {
        $this->id = $id;
        $this->description = $description;
      }
}
function devolverTipos($c){
    
    $sql="select * from tipos;";
    
    $resulset= mysqli_query($c,$sql);

        while($registro=mysqli_fetch_assoc($resulset)){
            
            
        }
    
}