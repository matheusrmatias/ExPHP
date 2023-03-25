<?php

    function fatorial($numero){
        if($numero <= 1){
            return 1;
        }else{
            return $numero * fatorial($numero - 1);
        }
    }


    $numero = $_POST['numero'];

    echo "O fatorial de $numero é ".fatorial($numero);


?>