<?php

$host = "localhost";
$porta = "5432";
$database = "aulaphp";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO visitantes(nome, cpf) VALUES(?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome, $cpf]);
}

$sqlListagem = "SELECT * FROM visitantes";
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
            <th>Nome</th>
            <th>CPF</th>
        </tr>
        <?php foreach ($rows as $visitante): ?>
        <tr>
            <td><?= $visitante['id'] ?></td>
            <td><?= $visitante['nome'] ?></td>
            <td><?= $visitante['cpf'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>