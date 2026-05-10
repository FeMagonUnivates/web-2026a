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
    $num_prontuario = $_POST['num_prontuario'];
    $tp_sangue = $_POST['tp_sangue'];

    $sql = "INSERT INTO pacientes(nome, num_prontuario, tp_sangue) VALUES(?,?,?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome, $num_prontuario, $tp_sangue]);
}

$sqlListagem = "SELECT * FROM pacientes";
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
            <th>Número do prontuário</th>
            <th>Tipo sanguíneo</th>
        </tr>
        <?php foreach ($rows as $pacientes): ?>
        <tr>
            <td><?= $pacientes['id'] ?></td>
            <td><?= $pacientes['nome'] ?></td>
            <td><?= $pacientes['num_prontuario'] ?></td>
            <td><?= $pacientes['tp_sangue'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>