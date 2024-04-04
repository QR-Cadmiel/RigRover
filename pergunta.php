<?php
include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

$conversaId = isset($_GET['id']) ? $_GET['id'] : '';

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
        <div id="header">
            <h1 id="pergunta_titulo"><?php echo isset($pergunta_titulo) ? $pergunta_titulo : "Pergunta"; ?></h1>
            <a id="voltar" href="forum.php">Voltar</a>
        </div>

        <div id="mensagens">
        </div>

        <div class="main-content">
            <form id="form-mensagem">
                <input type="text" id="mensagem" placeholder="Digite sua mensagem..." required>
            </form>
        </div>

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

        <script>
            var conn = new WebSocket('ws://localhost:8080'); // Supondo que o servidor WebSocket esteja na porta 8080
            var historicoMensagens = [];

            conn.onopen = function(e) {
                console.log("Conexão estabelecida!");
            };

            conn.onmessage = function(e) {
                var mensagem = e.data;
                historicoMensagens.push(mensagem); // Adiciona a mensagem ao histórico
                exibirMensagem(mensagem);
            };

            function exibirMensagem(mensagem) {
                var divMensagens = document.getElementById('mensagens');
                var novaMensagem = document.createElement('div');
                novaMensagem.textContent = mensagem;
                novaMensagem.classList.add('mensagem'); // Adiciona classe CSS à mensagem
                divMensagens.appendChild(novaMensagem);
            }

            function enviarMensagem(event) {
                event.preventDefault();
                var mensagemInput = document.getElementById('mensagem');
                var mensagem = mensagemInput.value;
                historicoMensagens.push(mensagem); // Adiciona a mensagem ao histórico
                conn.send(JSON.stringify(mensagem)); // Enviar a mensagem como string JSON
                mensagemInput.value = '';
                exibirMensagem(mensagem); // Exibe a mensagem na tela
            }

            // Carrega o histórico de mensagens ao carregar a página
            window.onload = function() {
                historicoMensagens.forEach(function(mensagem) {
                    exibirMensagem(mensagem);
                });
            }

            document.getElementById('mensagem').addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    enviarMensagem(event);
                }
            });
        </script>

</body>

</html>