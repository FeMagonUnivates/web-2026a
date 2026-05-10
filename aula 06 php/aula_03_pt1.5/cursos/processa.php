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
    $carga = $_POST['carga'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO cursos(nome, carga, categoria) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome, $carga, $categoria]);
}

$sqlListagem = "SELECT * FROM cursos";
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
            <th>Nome do curso</th>
            <th>Carga horária (horas)</th>
            <th>Categoria</th>
        </tr>
        <?php foreach ($rows as $cursos): ?>
        <tr>
            <td><?= $cursos['id'] ?></td>
            <td><?= $cursos['nome'] ?></td>
            <td><?= $cursos['carga'] ?></td>
            <td><?= $cursos['categoria'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>