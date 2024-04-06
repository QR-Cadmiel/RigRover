<?php
include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

    if (!empty($nome) && !empty($mensagem)) {
        $mysqli->query("INSERT INTO chat1 (nome, mensagem) VALUES ('$nome', '$mensagem')");
    }
}

// Função para obter as mensagens recentes
function getRecentMessages($mysqli) {
    $messages = array();
    $sql = $mysqli->query("SELECT * FROM chat1 ORDER BY id DESC LIMIT 10"); // Ajuste o limite conforme necessário
    if ($sql->num_rows > 0) {
        while ($row = $sql->fetch_assoc()) {
            $messages[] = $row;
        }
    }
    return $messages;
}

// Verifica se há novas mensagens a cada segundo
while (true) {
    $messages = getRecentMessages($mysqli);
    echo json_encode($messages);

    // Limpa o buffer de saída e envia todas as mensagens pendentes para o navegador
    ob_flush();
    flush();

    // Espera 1 segundo antes de verificar novamente
    sleep(1);
}