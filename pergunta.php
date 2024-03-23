<?php

session_start();

// Redirecionar para login se o usuário não estiver autenticado
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'conexao.php';

// Conexão com o banco de dados
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verificação de conexão
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

// Função para carregar as mensagens
function carregarMensagens($conversaId, $mysqli)
{
    $sql = "SELECT * FROM conversa WHERE pergunta_id = '$conversaId' ORDER BY data_hora ASC";
    $result = $mysqli->query($sql);
    $mensagens = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mensagens[] = $row;
        }
    }
    return $mensagens;
}

// Função para enviar mensagem
function enviarMensagem($conversaId, $texto, $usuario, $mysqli)
{
    $data_hora = date('Y-m-d H:i:s');
    $sql = "INSERT INTO conversa (pergunta_id, mensagem, usuario, data_hora)
    VALUES ('$conversaId', '$texto', COALESCE('$usuario', 'Usuário Anônimo'), '$data_hora')";
    if ($mysqli->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// ID da conversa
$conversaId = isset($_GET['id']) ? $_GET['id'] : '';

// Carregar mensagens
$mensagens = carregarMensagens($conversaId, $mysqli);

// Processar envio de mensagem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensagem'])) {
    $texto = $_POST['mensagem'];
    $usuario = $_SESSION['user_nome'] ?? null;
    enviarMensagem($conversaId, $texto, $usuario, $mysqli);

    // Redirecionar para evitar reenvio do formulário
    header('Location: pergunta.php?id=' . $conversaId);
    exit();
}

$usuario_id = $_SESSION['user_id'];

$sql = "SELECT name FROM clientes WHERE id = '$usuario_id'";
$result = $mysqli->query($sql);

if ($result->num_rows === 1) {
    $usuario_nome = $result->fetch_assoc()['name'];
} else {
    // Exibir mensagem de erro ou nome padrão
    $usuario_nome = "Usuário Desconhecido";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat em Tempo Real</title>
</head>

<body>
    <h1>Chat em Tempo Real</h1>

    <div id="mensagens">
        <!-- Mensagens carregadas do banco de dados serão exibidas aqui -->
    </div>

    <form id="form-mensagem">
        <input type="text" id="mensagem" placeholder="Digite sua mensagem..." required>
        <button type="submit">Enviar</button>
    </form>

    <script>
        // Estabelecer conexão WebSocket
        const socket = new WebSocket('ws://localhost:8080');

        // Manipulador de evento para quando a conexão WebSocket é aberta
        socket.addEventListener('open', function(event) {
            console.log('Conexão WebSocket estabelecida');
        });

        // Manipulador de evento para quando uma mensagem é recebida do servidor WebSocket
        socket.addEventListener('message', function(event) {
            const mensagem = JSON.parse(event.data);
            exibirMensagem(mensagem);
        });

        // Manipulador de evento para enviar mensagem quando o formulário é enviado
        document.getElementById('form-mensagem').addEventListener('submit', function(event) {
            event.preventDefault(); // Impedir o envio padrão do formulário
            const texto = document.getElementById('mensagem').value; // Obter o valor do campo de mensagem
            enviarMensagem(texto); // Enviar mensagem para o servidor
            document.getElementById('mensagem').value = ''; // Limpar o campo de mensagem
        });

        // Função para enviar mensagem para o servidor WebSocket
        function enviarMensagem(texto) {
            const mensagem = {
                tipo: 'mensagem',
                texto: texto
            };
            socket.send(JSON.stringify(mensagem));
        }

        // Função para exibir mensagem na interface do usuário
        function exibirMensagem(mensagem) {
            const divMensagem = document.createElement('div');
            divMensagem.innerHTML = `<p><strong>${mensagem.usuario}</strong> - ${mensagem.data_hora}</p><p>${mensagem.texto}</p>`;
            document.getElementById('mensagens').appendChild(divMensagem);
        }
    </script>
</body>
</html>