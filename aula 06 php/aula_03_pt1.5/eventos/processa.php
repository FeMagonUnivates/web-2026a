<?php

$host = "localhost";
$porta = "5432";
$database = "Web_2026_pt1.5";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $local = $_POST['local'];

    $sql = "INSERT INTO eventos(nome, data, local) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome, $data, $local]);
}

$sqlListagem = "SELECT * FROM eventos";
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
            <th>Nome do evento</th>
            <th>Data</th>
            <th>Local</th>
        </tr>
        <?php foreach ($rows as $eventos): ?>
        <tr>
            <td><?= $eventos['id'] ?></td>
            <td><?= $eventos['nome'] ?></td>
            <td><?= $eventos['data'] ?></td>
            <td><?= $eventos['local'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>