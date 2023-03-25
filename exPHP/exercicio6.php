<?php

    $valor = $_POST['valor'];
    $venda = 0;

    echo "Valor do produto: R$ $valor <br>";

    if($valor<200){
        $venda = $valor*1.45;
        echo "Valor de Venda: R$ $venda";
    }else{
        $venda = $valor*1.30;
        echo "Valor de Venda: R$ $venda";
    }

?>