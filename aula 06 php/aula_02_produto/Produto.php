<?php

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirInformacoes() {
        echo "<h3>Nome: " . $this->nome . "</h3>";
        echo "<h3>Preço: R$ " . $this->preco . "</h3>";
    }
}

?>