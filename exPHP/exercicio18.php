<?php

    function fatorial($numero){
        $fatorial = $numero;

        for($i=$numero-1; $i>1; $i--){
            $fatorial *= $i;
        };
        echo "O fatorial do numero $numero é $fatorial";
    }

    $numero = $_POST['numero'];

    fatorial($numero);

?>