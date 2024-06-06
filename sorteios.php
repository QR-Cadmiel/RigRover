<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteios - RigRover</title>
    <link rel="stylesheet" href="assets/css/sorteios.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="rigrover-1">
        <nav class="navbar">

            <div>
                <img src="img\Nova_Logo_RigRover.png" alt="" class="logonav">
            </div>

            <ul>
                <li>
                    <a href="home.php" id="btn-nav">Página Inicial</a>
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
                    <a href="games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="#" onclick="confirmLogout()">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="evt-ct">

            <div class="ticket">
                <h1>Sorteio de ingresso da BGS</h1>
                <div class="venda1">
                    <div class="leftvenda1">
                        <img width="600px"
                            src="https://i0.wp.com/mundodrix.com.br/site/wp-content/uploads/2018/09/Aplicativo-Oficial-da-Brasil-Game-Show.png?fit=1090%2C457&ssl=1"
                            alt="">
                    </div>

                    <div class="rightvenda1">
                        <h5>É hora de participar do sorteio mais emocionante do momento! Estamos oferecendo a chance
                            única de ganhar um ticket de entrada para a Brasil Game Show, o maior evento de games da
                            América Latina. </h5>
                        <h5>Para concorrer, siga estas simples etapas:</h5>
                        <h5>1. Basta clicar em participar no sorteio!</h5>
                        <h5>O resultado do sorteio será divulgado no e-mail do ganhador e nessa página.</h5>
                        <h5>Não perca esta oportunidade de viver a emoção da BGS. Boa sorte!</h5>
                        <h5 style="color: lime; text-decoration: underline;">Começa em: 10/04/2024</h5>
                        <h5 style="color: grey">Encerra em: 21/04/2024</h5>
                    </div>
                </div>
                <div class="undervenda1">

                    <button class="btn-ticket" onclick="sorteioClick()">Participar do sorteio</button>
                </div>
            </div>
        </div>

        <script>
            function sorteioClick() {
                alert('O sorteio ainda não começou.');
            }
        </script>


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
                            <a id="instarigrover"><img src="assets/img/iconinstagram.png" alt=""></a>
                            <a id="twiterrigrover"><img src="assets/img/iconx.png" alt=""></a>
                            <a id="facerigrover"><img src="assets/img/iconfacebook.png" alt=""></a>
                            <a id="youtuberigrover"><img src="assets/img/iconyoutube.png" alt=""></a>
                        </div>
                        <script>
                            document.getElementById('instarigrover').addEventListener('click', function() {
                            window.open('https://www.instagram.com/rigrovergames/', '_blank');
                            });

                            document.getElementById('twiterrigrover').addEventListener('click', function() {
                            window.open('https://twitter.com/RigRoverGames', '_blank');
                            });

                            document.getElementById('facerigrover').addEventListener('click', function() {
                            window.open('https://www.facebook.com/profile.php?id=61556959637519', '_blank');
                            });

                            document.getElementById('youtuberigrover').addEventListener('click', function() {
                            window.open('https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg', '_blank');
                            });
                            </script>

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