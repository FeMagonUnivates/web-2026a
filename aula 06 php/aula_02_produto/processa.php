<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    
    require_once "Produto.php";
    
    $produto = new Produto($nome, $preco);
    $produto->exibirInformacoes();
}

?>