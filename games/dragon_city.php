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
                        <img src="https://store-images.s-microsoft.com/image/apps.60940.14098991041572765.24a22c10-771e-440c-b9aa-1522a505d4ba.f8aff810-310f-4b23-9d5c-e6b43337bf06?h=576"
                            class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Dragon City</h2>
                        <h5>Dragon City é um jogo eletrônico de simulação desenvolvido pela Socialpoint, lançado em maio
                            de 2012. Nele, os jogadores podem criar e gerenciar sua própria cidade de dragões, criando
                            habitats, criando novas espécies de dragões e competindo em batalhas.</h5>
                        <h5>Com uma jogabilidade cativante, Dragon City se destaca por sua mecânica de criação de
                            dragões e pelas batalhas emocionantes. Além do modo de jogo solo, o jogo também oferece a
                            opção de competir com outros jogadores em arenas de batalha.</h5>
                        <h5>Com gráficos coloridos e uma variedade de dragões para colecionar e treinar, Dragon City
                            continua sendo um dos jogos mais populares no gênero de simulação de vida virtual, definindo
                            um padrão para a experiência de cuidar de criaturas místicas.</h5>
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