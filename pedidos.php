<?php

include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

$sql = "SELECT * FROM fale_conosco";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Todas as Solicitações</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Mensagem</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["mensagem"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há solicitações.";
}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - RigRover</title>
</head>
<body>
    
</body>
</html>