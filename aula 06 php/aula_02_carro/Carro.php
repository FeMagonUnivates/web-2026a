<?php

class Carro {
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function imprimirFicha() {
        echo "<h3>Marca: " . $this->marca . "</h3>";
        echo "<h3>Modelo: " . $this->modelo . "</h3>";
        echo "<h3>Ano: " . $this->ano . "</h3>";
    }
}

?>