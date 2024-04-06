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

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat em Tempo Real</title>
    <link rel="stylesheet" href="assets/css/pergunta.css">
    <script type="text/javascript">
        function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('mensagens').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php', true);
            req.send();
        }

        setInterval(function() {
            ajax();
        }, 1000);
    </script>
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

        <div id='mensagens'></div>
        <div class="main-content">
            <form method="post" action="pergunta.php" id="form-mensagem">
                <input type="text" name="mensagem" placeholder="Digite sua mensagem..." id="mensagem">
                <input type="text" name="nome" placeholder="Digite seu nome..." id="mensagem">
                <input type="submit" value="Enviar" id="mensagem">
            </form>
        </div>

        <footer>
            <div class="cont-1">
                <img src="assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
                <ul>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="#quem-somos">Quem Somos?</a></li>
                    <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
                </ul>
            </div>
            <div class="cont-2">
                <div>
                    <div class="redes-footer">
                        <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png" alt=""></a>
                        <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="assets/img/iconfacebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="assets/img/iconyoutube.png" alt=""></a>
                    </div>
                    <ul>
                        <li>
                            <a href="fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li>
                            <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
                        </li>
                        <li>
                            <a href="termo_e_condicoes.php">Termos e Condições</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </footer>

</body>

</html>