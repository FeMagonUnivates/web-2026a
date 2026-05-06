<?php

$host = "localhost";
$porta = "5432";
$database = "aulaphp";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dtnasc = $_POST['dtnasc'];
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO funcionarios(dtnasc, nome, salario) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$dtnasc, $nome, $salario]);
}

$sqlListagem = "SELECT * FROM funcionarios";
$resultado = $conexao->query($sqlListagem);
$rows = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>

<body>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Data de nascimento</th>
            <th>Nome</th>
            <th>Salário</th>
        </tr>
        <?php foreach ($rows as $funcionario): ?>
        <tr>
            <td><?= $funcionario['id'] ?></td>
            <td><?= $funcionario['dtnasc'] ?></td>
            <td><?= $funcionario['nome'] ?></td>
            <td><?= $funcionario['salario'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>