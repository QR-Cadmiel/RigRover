<?php

include '../conexao.php';
include '../validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - Honkai: Star rail</title>
    <link rel="stylesheet" href="../assets/css/games-info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets\css\responsividade\games-info-responsivo.css">
    <script src="../assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
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

    <!-- --------Hamburguinho Menu----------  -->
    <div class="topnav">
        <div class="active">
            <a href="#myLinks"></a>
        </div>

        <div id="myLinks">
            <a href="../home.php">Página Inicial</a>
            <a href="../noticias.php">Noticias</a>
            <a href="../eventos.php">Eventos</a>
            <a href="../forum.php">Fórum</a>
            <a href="../comparar_hardwares.php">Hardware</a>
            <a href="../games.php">Wiki Jogos</a>
            <a href="../logout.php">Deslogar da Conta</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- ----------------------------------------- -->

    <div class="container">
        <div class="evt-ct">

            <div class="images-evt">
                <div class="img1">
                    <div class="leftevent1">
                        <img src="https://cdn2.unrealengine.com/blog-en-1920x1080-1920x1080-c2f4a5354c76.jpg" class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Honkai Star Rail</h2>
                        <h5>Honkai Star Rail é um jogo eletrônico de ação e aventura desenvolvido pela miHoYo, lançado
                            em [data de lançamento]. Ambientado em um universo futurista e cheio de elementos de ficção
                            científica, o jogo segue a história de [nome do protagonista], [breve descrição do
                            protagonista].</h5>
                        <h5>Com uma narrativa envolvente, Honkai Star Rail destaca-se por suas missões elaboradas e pela
                            liberdade dada aos jogadores para explorar o vasto universo do jogo. Além da campanha para
                            um jogador, o jogo oferece [recurso/modeo adicional, se aplicável].</h5>
                        <h5>Com gráficos impressionantes e uma infinidade de atividades para explorar, Honkai Star Rail
                            está rapidamente ganhando popularidade e se estabelecendo como uma referência no gênero de
                            jogos de ação e aventura.</h5>
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
                <li><a href="../index.php">Página Inicial</a></li>
                <li><a href="../#quem-somos">Quem Somos?</a></li>
                <li><a href="../#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
            <div>
                <div class="redes-footer">
                    <a href="https://www.instagram.com/rigrovergames/"><img src="../assets/img/iconinstagram.png" alt=""></a>
                    <a href="https://twitter.com/RigRoverGames"><img src="../assets/img/iconx.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="../assets/img/iconfacebook.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="../assets/img/iconyoutube.png" alt=""></a>
                </div>
                <ul>
                    <li>
                        <a href="../fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="../politicas_de_privacidade.php">Politicas de Privacidade</a>
                    </li>
                    <li>
                        <a href="../termo_e_condicoes.php">Termos e Condições</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>