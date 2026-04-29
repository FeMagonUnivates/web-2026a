<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $fundacao = $_POST["fundacao"];
    $estadio = $_POST["estadio"];
    $cor = $_POST["cor"];

    include "TimeFutebol.php";
    
    $time = new TimeFutebol($nome, $fundacao, $estadio, $cor);
    $time->imprimeAtributos();
}

?>