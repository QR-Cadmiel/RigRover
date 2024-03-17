<?php
session_start();

include 'conexao.php';

$sql = "SELECT id, data, descricao FROM lembretes";
$result = $mysqli->query($sql);

$events = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $event = [
            'id' => $row['id'],
            'title' => $row['descricao'],
            'start' => $row['data']
        ];
        $events[] = $event;
    }
    $result->free();
} else {
    echo "Erro ao recuperar lembretes: " . $mysqli->error;
}

$mysqli->close();

echo json_encode($events);
