<?php

$host = "localhost";
$porta = "5432";
$database = "Web_2026_pt1.5";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql: host=$host; port=$porta dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO livros(titulo, autor, isbn) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$titulo, $autor, $isbn]);
}

$sqlListagem = "SELECT * FROM livros";
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
            <th>Título do livro</th>
            <th>Autor</th>
            <th>ISBN</th>
        </tr>
        <?php foreach ($rows as $livros): ?>
        <tr>
            <td><?= $livros['id'] ?></td>
            <td><?= $livros['titulo'] ?></td>
            <td><?= $livros['autor'] ?></td>
            <td><?= $livros['isbn'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>