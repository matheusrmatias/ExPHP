<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3)/3;

    echo "
        Nota 1: $nota1<br>
        Nota 2: $nota2<br>
        Nota 3: $nota3<br>
        Média : $media<br>
    ";

    if ($media >= 7){
        echo '<p style="color: blue;">Aprovado</p>';
    }else if($media<3){
        echo '<p style="color: red;">Reprovado</p>';
    }else{
        echo '<p style="color: rgb(121, 119, 0);">Exame</p>';
    }

?>