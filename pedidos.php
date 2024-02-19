<?php
session_start();

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

// Query para selecionar todas as solicitações
$sql = "SELECT * FROM fale_conosco";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados em uma tabela
    echo "<h2>Todas as Solicitações</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Mensagem</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["mensagem"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há solicitações.";
}

// Fecha a conexão após a execução da consulta
$mysqli->close();
?>
