<?php

include_once("conexao.php");
mysqli_set_charset($conn, 'utf8');
header('Content-type: application/json');

$busca_mapa = "SELECT * FROM bem WHERE ativo = 'SIM'";
$res_consulta = mysqli_query($mysqli, $busca_mapa);
$data = array();

while ($row = mysqli_fetch_assoc($res_consulta)) {
	$data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
mysqli_close($mysqli);