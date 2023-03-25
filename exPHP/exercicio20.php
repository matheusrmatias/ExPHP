<?php

    function soma($numero1, $numero2){
        $maior = $numero1;
        $menor = $numero2;
        $soma = 0;

        if($numero2>$numero1){
            $maior = $numero2;
            $menor = $numero1;
        }


        for($i=$menor; $i<=$maior; $i++){
            $soma += $i;
        }

        return "$soma";
    }

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    echo "A soma de todos os numeros inteiro de $numero1 até $numero2 é ".soma($numero1,$numero2);

?>