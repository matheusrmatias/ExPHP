<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $numero1 = $numero2 + $numero3;

    $numero2++;
    $numero3--;


    echo "Número 1: $numero1<br>Número 2: $numero2<br>Número 3: $numero3";
?>