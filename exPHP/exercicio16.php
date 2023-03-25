<?php

    $letra = $_POST['letra'];

    switch ($letra){
        case 'a' or 'A': echo "A letra $letra é uma vogal";
            break;
        case "E" or "e" : echo "A letra $letra é uma vogal";
            break;
        case "I" or "i" : echo "A letra $letra é uma vogal";
            break;
        case "O" or "o" : echo "A letra $letra é uma vogal";
            break;
        case "U" or "u" : echo "A letra $letra é uma vogal";
            break;
        default : echo "A letra $letra é uma consoante";
            break;
    }

    
?>