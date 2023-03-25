<?php

    function calcular($operacao, $numero1, $numero2){
        $resultado = 0;
        if($operacao == 1){
            $resultado = $numero1 + $numero2;
            echo "A soma de $numero1 e $numero2 é $resultado";
        }else if($operacao == 2){
            $resultado = $numero1 - $numero2;
            echo "A subtração de $numero1 e $numero2 é $resultado";
        }else if($operacao == 3){
            $resultado = $numero1 * $numero2;
            echo "A multiplicação de $numero1 e $numero2 é $resultado";
        }else if($operacao == 4){
            $resultado = $numero1 / $numero2;
            echo "A divisão de $numero1 e $numero2 é $resultado";
        }
    }

    $operacao = $_POST['operacao'];

    $numero1 = $_POST['numero1'];

    $numero2 = $_POST['numero2'];

    calcular($operacao, $numero1, $numero2);

?>