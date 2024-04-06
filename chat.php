<?php
include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

$sql = $mysqli->query("SELECT * FROM chat1");
if ($sql->num_rows > 0) {
    while ($key = $sql->fetch_assoc()) {
        echo "<h3>" . $key['nome'] . "</h3>";
        echo "<p>" . $key['mensagem'] . "</p>";
    }
}