<?php

    $A = $_POST['num1'];
    $B = $_POST['num2'];
    $C = $_POST['num3'];

    $raizA = sqrt($A);
    $raizB = sqrt($B);
    $raizC = sqrt($C);

    echo "
        A raiz quadrada de $A é $raizA<br>
        A raiz quadrada de $B é $raizB<br>
        A raiz quadrada de $C é $raizC<br>
        
    "

?>