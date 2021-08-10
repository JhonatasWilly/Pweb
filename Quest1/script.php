<?php

// Valores variaveis
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    echo nl2br("Variaveis\n\n");
    echo nl2br("Nome -> $nome \n");
    echo nl2br("Endereco -> $endereco\n");
    echo nl2br("Cidade -> $cidade\n");
    echo nl2br("Estado -> $estado\n");
    echo nl2br("CEP -> $cep\n");
    echo nl2br("Telefone -> $telefone\n");
    echo nl2br("Celular -> $celular\n");


// Valores constantes 
    define("rg", $_POST['rg']);
    define("cpf", $_POST['cpf']);
    define("pis", $_POST['pis']);

    echo nl2br("\nConstantes\n");
    echo nl2br("\nRG - > " . rg);
    echo nl2br("\nCPF -> " . cpf);
    echo nl2br("\nPIS -> " . pis);

?>