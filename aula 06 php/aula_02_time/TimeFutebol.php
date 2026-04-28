<?php

class TimeFutebol {
    private $nome;
    private $fundacao;
    private $estadio;
    private $cor;

    public function __construct($nome, $fundacao, $estadio, $cor) {
        $this->nome = $nome;
        $this->fundacao = $fundacao;
        $this->estadio = $estadio;
        $this->cor = $cor;
    }

    public function imprimeAtributos() {
        echo "<h3>Nome do Time: " . $this->nome . "</h3>";
        echo "<h3>Fundação: " . $this->fundacao . "</h3>";
        echo "<h3>Estádio: " . $this->estadio . "</h3>";
        echo "<h3>Cor: " . $this->cor . "</h3>";
    }
}

?>