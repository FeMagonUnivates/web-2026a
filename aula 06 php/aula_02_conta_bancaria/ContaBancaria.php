<?php

class ContaBancaria {
    private $nome;
    private $numero_conta;
    private $saldo;

    public function __construct($nome, $numero_conta, $saldo) {
        $this->nome = $nome;
        $this->numero_conta = $numero_conta;
        $this->saldo = $saldo;
    }

    public function exibirInformacoes() {
        echo "<h3>Nome: " . $this->nome . "</h3>";
        echo "<h3>Número da conta: " . $this->numero_conta . "</h3>";
        echo "<h3>Saldo: R$ " . $this->saldo . "</h3>";
    }
}

?>