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
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets\css\responsividade\home-responsivo.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/hamburguinho.js"></script>
    <script src="assets/js/logout.js"></script>
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
                    <a href="hardware.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="#" onclick="confirmLogout()">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav">
            <div class="active">
                <a href="#myLinks"></a>
            </div>

            <div id="myLinks">
                <a href="home.php">Página Inicial</a>
                <a href="noticias.php">Noticias</a>
                <a href="eventos.php">Eventos</a>
                <a href="forum.php">Fórum</a>
                <a href="hardware.php">Hardware</a>
                <a href="games.php">Wiki Jogos</a>
                <a href="logout.php">Deslogar da Conta</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- ----------------------------------------- -->

        <div class="centro">
            <img src="assets/img/logo2.png" alt="" class="logodois">
            <p class="slogan">Bem-vindo ao Rig Rover!</p>
            <p class="slogan">Sua jornada no mundo dos games começa aqui.</p>
        </div>
    </div>
    <div class="categoria_div1" id="hardware">

        <div class="categorias" id="servicos">
            <img class="categoria_foto" src="assets/img/eventoshome.png">
        </div>
        <div id="coluna-categoria">
            <h2>Eventos</h2>
            <p class="categoria_texto">Descubra os eventos mais emocionantes do mundo dos games e garanta sua
                participação. Desde conferências de desenvolvedores até competições de eSports, temos tudo para
                você.</p>

            <a href="eventos.php" id="btn-categorias">
                <button type="submit">
                    Explore os Eventos
                </button>
            </a>
        </div>
    </div>

    <div class="categoria_div2">

        <div class="categorias">
            <img class="categoria_foto" src="assets/img/hardwarehome.png">

        </div>
        <div id="coluna-categoria">
            <div class="titulo_categoria"></div>

            <h2>Hardware</h2>

            <p class="categoria_texto">Encontre as melhores opções de hardware para aprimorar sua experiência de jogo.
                Desde placas de vídeo poderosas até periféricos de última geração, nós temos as recomendações certas
                para você.</p>
            <a href="hardware.php" id="btn-categorias">
                <button type="submit">
                    Explore o Hardware
                </button>
            </a>
        </div>
    </div>
    <div class="categoria_div3" id="hardware">

        <div class="categorias">
            <img class="categoria_foto" src="assets/img/gameshome.png">
        </div>
        <div id="coluna-categoria">
            <h2>Jogos</h2>
            <p class="categoria_texto">Descubra os últimos lançamentos, análises de jogos e notícias sobre o universo
                dos games.
                Esteja sempre atualizado sobre o que há de melhor para jogar, seja em consoles, PC ou dispositivos
                móveis.</p>

            <a href="games.php" id="btn-categorias">
                <button type="submit">
                    Explore os jogos
                </button>
            </a>
        </div>
    </div>

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