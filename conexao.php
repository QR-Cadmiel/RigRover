<?php

$hostname = "localhost";
$database = "db_rigrover";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
} else {
    echo 'Conexão bem-sucedida.';
}

$mysqli->close();

?>