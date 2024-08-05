<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RigRover</title>
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/responsividade/home-responsivo.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/logourl.png">
    <script src="assets/js/hamburguinho.js"></script>
    <script src="assets/js/logout.js"></script>
    <script src="assets/js/dropdownuser.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Rowdies:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li><a href="home" id="btn-nav">Página Inicial</a></li>
                <li><a href="noticias" id="btn-nav">Notícias</a></li>
                <li><a href="eventos" id="btn-nav">Eventos</a></li>
                <li><a href="forum" id="btn-nav">Fórum</a></li>
                <li><a href="hardware" id="btn-nav">Hardware</a></li>
                <li><a href="games.php" id="btn-nav">Wiki Jogos</a></li>
                <li class="dropdown">
                 <a href="javascript:void(0)" class="dropbtn"><img src="assets\img\imagemuserdrop.png" alt="Botão de sair da conta" class="img-logout"></a>
                     <div class="dropdown-content"> <!-- lembrar de arrumar o logout seguo, toda vez que sai da conta dá para voltar -->
                <a href="#" onclick="confirmLogout()"class="logout-link">
                <span><img class="logout-icon" src="assets\img\logout.png" alt="">Sair</span> 
             </a>
            </div>
                </li>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav">
            <div class="active">
                <a href="#myLinks"></a>
            </div>
            <div id="myLinks">
                <a href="home">Página Inicial</a>
                <a href="noticias">Notícias</a>
                <a href="eventos">Eventos</a>
                <a href="forum">Fórum</a>
                <a href="hardware">Hardware</a>
                <a href="games.php">Wiki Jogos</a>
                <a href="logout">Deslogar da Conta</a>
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
    <div class="content-categorias">
        <div class="categoria_div1">
            <div class="fundo-categoria">
            <div class="categorias">
                <img class="categoria_foto" src="assets/img/imghome-eventos.png">
            </div>
            <div id="coluna-categoria">
                <h2>Participe dos eventos mais emocionantes do mundo dos games</h2>
                <p class="categoria_texto">Descubra os eventos mais emocionantes do mundo dos games e garanta sua participação. De conferências de desenvolvedores, onde grandes inovações são reveladas, a competições de eSports com os melhores jogadores do mundo, temos tudo para você.</p>
                <p class="categoria_texto">Fique por dentro dos principais eventos, feiras e campeonatos, e aproveite cada oportunidade para se conectar com a comunidade gamer e viver experiências inesquecíveis.</p>
                <a href="eventos" id="btn-categorias">
                    <button type="submit">Acessar</button>
                </a>
            </div>
            </div>
        </div>

        <div class="categoria_div2">
        <div class="fundo-categoria" id="hardware">
            <div class="categorias">
                <img class="categoria_foto" src="assets/img/imghome-hardware.png">
            </div>
            <div id="coluna-categoria">
                <h2>Otimize sua jogabilidade com o melhor hardware</h2>
                <p class="categoria_texto">Descubra as melhores opções de hardware para levar sua experiência de jogo ao próximo nível. Desde placas de vídeo poderosas que garantem gráficos incríveis até periféricos de última geração que oferecem maior precisão e conforto.</p>
                <p class="categoria_texto">Temos as recomendações ideais para você. Atualize seu setup e aproveite ao máximo cada partida com nossos conselhos especializados.</p>
                <a href="hardware" id="btn-categorias">
                    <button type="submit">Acessar</button>
                </a>
            </div>
            </div>
        </div>

        <div class="categoria_div3">
        <div class="fundo-categoria">
            <div class="categorias">
                <img class="categoria_foto" src="assets/img/imghome-games.png">
            </div>
            <div id="coluna-categoria">
                <h2>Explore novos jogos e encontre sua próxima paixão</h2>
                <p class="categoria_texto">Descubra os últimos lançamentos, análises de jogos e notícias sobre o universo dos games. Mantenha-se atualizado com os últimos lançamentos, análises detalhadas e notícias do universo dos games. Descubra o que há de melhor para jogar em consoles, PC e dispositivos móveis, e mergulhe de cabeça no mundo dos jogos.</p>
                <a href="games.php" id="btn-categorias">
                    <button type="submit">Acessar</button>
                </a>
            </div>
        </div>
        </div>
    </div>
    <footer>
        <div class="cont-1">
            <img src="assets/img/mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
            <ul>
                <li><a href="index">Página Inicial</a></li>
                <li><a href="#quem-somos">Quem Somos?</a></li>
                <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
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
                            window.open('https://www.youtube.com/channel/UCi9tZH0b-9OXUy4MZPiFVHA', '_blank');
                            });
                        </script>
        </div>
        <div class="cont-3">
            <p>Desenvolvido por Cadmiel QR</p>
            <p>© Rig Rover 2024. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
