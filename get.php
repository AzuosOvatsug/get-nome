<?php
    $cnpj = $_GET["id"];
    $json_file = file_get_contents("https://www.receitaws.com.br/v1/cnpj/$cnpj");   
    $json_str = json_decode($json_file, true);
    $nome = $json_str["nome"];
    return $nome;
?>