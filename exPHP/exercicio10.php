<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    
    $media1 = ($numero1 + $numero2)/2;
    $media2 = ($numero3 + $numero4)/2;

    $soma = $media1 + $media2;

    if ($soma < 8){
        echo "<b>$soma</b>";
    }else{
        echo "$soma";
    }


?>