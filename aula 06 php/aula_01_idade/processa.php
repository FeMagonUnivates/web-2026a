<?php

$idade = $_POST['idade'];

if($idade < 16) {
    echo "Você ainda não pode fazer seu título de eleitor!";
} else {
    echo "Você pode fazer seu título de eleitor!";
}

?>