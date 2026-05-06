<?php

$host = "localhost";
$porta = "5432";
$database = "aulaphp";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];
    $codbarras = $_POST['codbarras'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos(descricao, codbarras, preco) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$descricao, $codbarras, $preco]);
}

$sqlListagem = "SELECT * FROM produtos";
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
            <th>Descrição</th>
            <th>Código de barras</th>
            <th>Preço</th>
        </tr>
        <?php foreach ($rows as $produto): ?>
        <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['codbarras'] ?></td>
            <td><?= $produto['preco'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>