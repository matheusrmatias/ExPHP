<?php

    function primo($numero){
        $soma = 0;
        for($i=1; $i<=$numero; $i++){
            if ($numero % $i == 0){
                $soma++;
            }
        }
        if($soma==2){
            return "é primo";
        }else{
            return "não é primo";
        }

    }

    $numero = $_POST['numero'];

    echo "O número $numero ".primo($numero);
?>