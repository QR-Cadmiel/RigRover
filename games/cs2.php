<?php

include '../conexao.php';
include '../validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - BGS</title>
    <link rel="stylesheet" href="../assets/css/games-info.css">
</head>

<body>

    <div class="rigrover-1">
        <nav class="navbar">
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
                <a href="logout.php">
                    <img src="../assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="evt-ct">

            <div class="images-evt">
                <div class="img1">
                    <div class="leftevent1">
                        <img src="https://assets.gamearena.gg/wp-content/uploads/2023/03/30004837/662243.jpg"
                            class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Counter-Strike 2</h2>
                        <h5>Counter-Strike 2, também conhecido como CS2, é um jogo eletrônico de tiro em primeira pessoa
                            desenvolvido pela Valve Corporation. Lançado em setembro de 2013, o jogo mantém sua essência
                            competitiva e tática, colocando dois times, Terroristas e Contra-Terroristas, em confronto
                            em diversos cenários.</h5>
                        <h5>Com uma jogabilidade envolvente, CS2 destaca-se por seus mapas intricados e pela necessidade
                            de trabalho em equipe e estratégia. Além do modo tradicional de jogo, o Counter-Strike 2
                            oferece modos como Deathmatch, Captura a Bandeira e Bomb Defusal.</h5>
                        <h5>Com gráficos atualizados e uma comunidade dedicada, Counter-Strike 2 continua sendo um dos
                            jogos de tiro mais populares e influentes, estabelecendo um padrão para o gênero de FPS
                            competitivo.</h5>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="btn-voltar-mi">
        <a href="../games.php"><button class="btn-voltar">Voltar para Games</button></a>
    </div>

    <footer>
        <div class="cont-1">
            <img src="..\assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#quem-somos">Quem Somos?</a></li>
                <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
            <div>
                <div class="redes-footer">
                    <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png"
                            alt=""></a>
                    <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=61556959637519"><img
                            src="assets/img/iconfacebook.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img
                            src="assets/img/iconyoutube.png" alt=""></a>
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