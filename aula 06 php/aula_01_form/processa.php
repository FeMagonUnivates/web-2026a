<?php

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$idade = $_POST['idade'] ?? '';
$username = $_POST['username'] ?? '';
$senha = $_POST['senha'] ?? '';

echo "Cadastro feito com sucesso!<br><br>";
echo "Nome: " . $nome . "<br>";
echo "E-mail: " . $email . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Nome de usuário: " . $username;

?>