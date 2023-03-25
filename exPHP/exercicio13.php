<?php

    $cor1 = !is_null($_POST['cor1']) ?  $_POST['cor1'] : " " ;
    $cor2 = !is_null($_POST['cor2']) ?  $_POST['cor2'] : " " ;
    $cor3 = !is_null($_POST['cor3']) ?  $_POST['cor3'] : " " ;
    $cor4 = !is_null($_POST['cor4']) ?  $_POST['cor4'] : " " ;
    $cor5 = !is_null($_POST['cor5']) ?  $_POST['cor5'] : " " ;

    $nome = $_POST['nome'];

    $lista = array($cor1, $cor2, $cor3, $cor4, $cor5);

    foreach ($lista as $elemento){
        echo '<p style="color:'.$elemento.'">'.$nome.'</p>';
    }

?>