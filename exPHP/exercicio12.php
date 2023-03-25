<?php

    $texto = $_POST['texto'];

    for ($x=1; $x<7; $x++){
        echo "<h$x>$texto</h$x>";
    }

    $x=6;
    while($x>0){
        echo "<h$x>$texto</h$x>";
        $x--;
    }

?>