<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Peso está abaixo no normal.";
} else {
    echo "oi";
}

?>