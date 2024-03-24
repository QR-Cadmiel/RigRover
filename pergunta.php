<?php

session_start();

include 'conexao.php';
include 'validacao.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

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

$conversaId = isset($_GET['id']) ? $_GET['id'] : '';

$mensagens = carregarMensagens($conversaId, $mysqli);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensagem'])) {
    $texto = $_POST['mensagem'];
    $usuario = $_SESSION['user_nome'] ?? null;
    enviarMensagem($conversaId, $texto, $usuario, $mysqli);

    header('Location: pergunta.php?id=' . $conversaId);
    exit();
}

$usuario_id = $_SESSION['user_id'];

$sql = "SELECT name FROM clientes WHERE id = '$usuario_id'";
$result = $mysqli->query($sql);

if ($result->num_rows === 1) {
    $usuario_nome = $result->fetch_assoc()['name'];
} else {
    $usuario_nome = "Usuário Desconhecido";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat em Tempo Real</title>
    <link rel="stylesheet" href="assets/css/pergunta.css">
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="home.php" id="btn-nav">Página Inicial</a>
                </li>
                <li>
                    <a href="#servicos" id="btn-nav">Serviços</a>
                </li>
                <li>
                    <a href="noticias.php" id="btn-nav">Noticias</a>
                </li>
                <li>
                    <a href="eventos.php" id="btn-nav">Eventos</a>
                </li>
                <li>
                    <a href="forum.php" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="comparar_hardwares.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="#" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="logout.php">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>
        <?php
        $perguntas = array(
            array("id" => "pergunta1", "titulo" => "Como que eu troco o processador?", "descricao" => "Gostaria de saber como posso trocar o processador do meu compu..."),
            array("id" => "pergunta2", "titulo" => "Como que eu compro um produto?", "descricao" => "Estou interessado em comprar um produto específico, mas nã..."),
            array("id" => "pergunta3", "titulo" => "Posso ter múltiplas contas?", "descricao" => "Gostaria de saber se é permitido ter mais de uma conta cadastr..."),
            array("id" => "pergunta4", "titulo" => "Como posso formar uma parceria?", "descricao" => "Estou interessado em estabelecer uma parceria com a sua empres...")
        );

        $pergunta_id = $_GET['id'];
        $pergunta_titulo = '';
        foreach ($perguntas as $pergunta) {
            if ($pergunta['id'] === $pergunta_id) {
                $pergunta_titulo = $pergunta['titulo'];
                break;
            }
        }
        ?>

        <div id="header">
            <h1><?php echo $pergunta_titulo; ?></h1>
            <a id="voltar" href="forum.php">Voltar</a>
        </div>

        <div id="mensagens">
        </div>

        <div class="main-content">
            <form id="form-mensagem">
                <input type="text" id="mensagem" placeholder="Digite sua mensagem..." required>
            </form>
        </div>


        <script>
            const socket = new WebSocket('ws://localhost:8080');

            socket.addEventListener('open', function(event) {
                console.log('Conexão WebSocket estabelecida');
            });

            socket.addEventListener('message', function(event) {
                const mensagem = JSON.parse(event.data);
                exibirMensagem(mensagem);
            });

            document.getElementById('form-mensagem').addEventListener('submit', function(event) {
                event.preventDefault();
                const texto = document.getElementById('mensagem').value;
                enviarMensagem(texto);
                document.getElementById('mensagem').value = '';
            });

            function enviarMensagem(texto) {
                const mensagem = {
                    tipo: 'mensagem',
                    texto: texto
                };
                socket.send(JSON.stringify(mensagem));
            }

            function exibirMensagem(mensagem) {
                const divMensagem = document.createElement('div');
                divMensagem.innerHTML = `<p><strong>${mensagem.usuario}</strong> - ${mensagem.data_hora}</p><p>${mensagem.texto}</p>`;
                document.getElementById('mensagens').appendChild(divMensagem);
            }
        </script>
        <footer>
            <div id="tudo-footer">
                <div class="conteudo-footer">
                    <img src="assets/img/mascoterigrover.png" alt="" class="img-footer">
                    <ul>
                        <li>
                            <a href="#">Página Inicial</a>
                        </li>
                        <li>
                            <a href="#">Quem Somos?</a>
                        </li>
                        <li>
                            <a href="#">Noticias</a>
                        </li>
                    </ul>
                </div>
                <div class="conteudo2-footer">
                    <div>
                        <div class="redes-footer">

                            <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png" alt=""></a>
                            <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="assets/img/iconfacebook.png" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="assets/img/iconyoutube.png" alt=""></a>
                        </div>

                        <li>
                            <a href="fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li>
                            <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
                        </li>
                        <li>
                            <a href="termo_e_condicoes.php">Termos e Condições</a>
                        </li>
                    </div>
                </div>
            </div>
        </footer>

</body>

</html>