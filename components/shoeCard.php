<?php

    function ShoeCard($props){
        ?>
            <style>

            </style>

            <div>
                <?php
                 echo $props.$name
                ?>
            </div>
        
        <?php
    }

    $props={
        $name:"david",
        $lastName:"Lopez",
    };

    ShoeCard($props);
?>