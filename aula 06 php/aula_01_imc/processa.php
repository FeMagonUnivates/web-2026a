<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Peso está abaixo no normal.";
} elseif ($imc <= 24.9 ) {
    echo "Peso está normal.";
} elseif ($imc <= 29.9 ) {
    echo "Você está com sobrepeso.";
} else {
    echo "Você está obeso.";
}

?>
