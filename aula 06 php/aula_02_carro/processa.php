<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    
    include "Carro.php";
    
    $carro = new Carro($marca, $modelo, $ano);
    $carro->imprimirFicha();
}

?>