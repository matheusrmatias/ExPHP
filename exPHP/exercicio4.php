<?php

    $numero = $_POST['numero'];

    if ($numero > 0){
        echo "O número $numero é maior que zero";
    }else if($numero < 0){
        echo "O número $numero é menor que zero";
    }else {
        echo "O número $numero é igual que zero";
    }

?>