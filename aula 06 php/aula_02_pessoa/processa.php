<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    require_once "Pessoa.php";
    
    $pessoa = new Pessoa($nome, $idade);
    $pessoa->imprimeAtributos();
}

?>