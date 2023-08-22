<style>
    *{
        background-color:black;
        color:black;
        border:black;
    }
</style>


<?php
session_start();
session_destroy();
echo "<h1>sesion cerrada</h1>";

echo "<br><br><h2><a href=../index.php><button id='botonOutput'>Iniciar sesion</button></a></h2>";
?>
<div style="display:none;"><?php

header("Location:../index.php");
?>
</div>

<script src="../js/logout.js" ></script>
