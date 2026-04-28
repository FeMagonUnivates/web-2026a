<?php

class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function imprimeAtributos() {
        echo "<h3>Nome: " . $this->nome . "</h3>";
        echo "<h3>Idade: " . $this->idade . "</h3>";
    }
}

?>