<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? '';
    $numero_conta = $_POST["numero_conta"] ?? '';
    $saldo = $_POST["saldo"] ?? 0;

    if (empty($nome)) {
        echo "O campo 'nome' é obrigatório.";
        exit;
    }

    if (empty($numero_conta)) {
        echo "O campo 'número da conta' é obrigatório.";
        exit;
    }

    if ($saldo < 0) {
        echo "O saldo inicial não pode ser negativo.";
        exit;
    }

    include "ContaBancaria.php";
    
    $conta = new ContaBancaria($nome, $numero_conta, $saldo);
    $conta->exibirInformacoes();
}

?>