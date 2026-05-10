<?php

$host = "localhost";
$porta = "5432";
$database = "Web_2026_pt1.5";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];

    $sql = "INSERT INTO veiculos(placa, modelo, marca) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$placa, $modelo, $marca]);
}

$sqlListagem = "SELECT * FROM veiculos";
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
            <th>Placa</th>
            <th>Modelo</th>
            <th>Marca</th>
        </tr>
        <?php foreach ($rows as $veiculos): ?>
        <tr>
            <td><?= $veiculos['id'] ?></td>
            <td><?= $veiculos['placa'] ?></td>
            <td><?= $veiculos['modelo'] ?></td>
            <td><?= $veiculos['marca'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>