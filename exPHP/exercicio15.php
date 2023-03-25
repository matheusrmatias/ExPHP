<?php

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

    echo "<br>Usando For<br>";
    for($i=0; $i<12; $i++){
        echo "$meses[$i]<br>";
    }

    echo "<br>Usando Foreach<br>";
    foreach ($meses as $mes){
        echo "$mes<br>";
    }

?>