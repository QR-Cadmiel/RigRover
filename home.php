<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RigRover</title>
    <link rel="stylesheet" href="assents/css/home.css">
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="#">Quem Somos?</a>
                </li>
                <li>
                    <a href="#">Noticias</a>
                </li>
            </ul>
        </nav>

        <div class="centro">
            <img src="img\logo2.png" alt="" class="logodois">
            <p class="slogan">Bem-vindo ao Rig Rover!</p>
            <p class="slogan">Sua jornada no mundo dos games começa aqui.</p>
        </div>
    </div>

    <div class="descbr">
        <h3>Descubra o Mundo dos Games</h3>
        <p>Explore as três principais seções do Rig Rover e mergulhe de cabeça no universo dos games:</p>
        <p>Eventos: Descubra os eventos mais emocionantes do mundo dos games e garanta sua participação.</p>
        <p>Hardware: Encontre as melhores opções de hardware para aprimorar sua experiência de jogo.</p>
        <p>Jogos: Descubra os últimos lançamentos, análises de jogos e notícias sobre o universo dos games.</p>
    </div>

    <div class=eventos>
        <h3>Eventos</h3>
        <p>Descubra os eventos mais emocionantes do mundo dos games e garanta sua participação. Desde conferências de desenvolvedores até competições de eSports, temos tudo para você.</p>
        <a href="eventos.php">Explore os Eventos</a>
        <img src="img/eventoshome.png" alt="Eventos">
    </div>

    <div class="hardware">
        <h3>Hardware</h3>
        <p>Encontre as melhores opções de hardware para aprimorar sua experiência de jogo. Desde placas de vídeo poderosas até periféricos de última geração, nós temos as recomendações certas para você.</p>
        <a href="hardware.php">Explore os Hardwares</a>
        <img src="img/hardwarehome.png" alt="Hardwares">
    </div>

    <div class="games">
        <h3>Jogos</h3>
        <p>Descubra os últimos lançamentos, análises de jogos e notícias sobre o universo dos games. Esteja sempre atualizado sobre o que há de melhor para jogar, seja em consoles, PC ou dispositivos móveis.</p>
        <a href="games.php">Explore os Games</a>
        <img src="img/gameshome.png" alt="Games">
    </div>

    <div class="divrig">
        <p>Junte-se a nós no mundo dos games com o Rig Rover. Informação, diversão e a comunidade gamer reunidos em um só lugar.</p>
    </div>
    
    <footer>
        <div id="tudo-footer">
            <div class="conteudo-footer">
                <img src="img\mascoterigrover.png" alt="" class="img-footer">
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

                        <a href="https://www.instagram.com/rigrovergames/"><img src="img\iconinstagram.png" alt=""></a>
                        <a href="https://twitter.com/RigRoverGames"><img src="img\iconx.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="img\iconfacebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="img\iconyoutube.png" alt=""></a>
                    </div>

                    <li>
                        <a href="fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade.html">Politicas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes.html">Termos e Condições</a>
                    </li>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>