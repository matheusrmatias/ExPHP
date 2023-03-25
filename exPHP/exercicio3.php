<?php

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    echo "
    
    Nome Completo: $nome <br>
    Rua: $endereco <br>
    Cidade: $cidade <br>
    Estado: $estado <br>
    Cep: $cep <br>
    Telefone: $telefone <br>
    E-mail: $email <br>
    Idade: $idade anos <br>
    
    "
?>