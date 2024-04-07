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
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets\css\responsividade\games-info-responsivo.css">
    <script src="../assets/js/hamburguinho.js"></script>
</head>

<body>

    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="../home.php" id="btn-nav">Página Inicial</a>
                </li>
                <li>
                    <a href="../noticias.php" id="btn-nav">Noticias</a>
                </li>
                <li>
                    <a href="../eventos.php" id="btn-nav">Eventos</a>
                </li>
                <li>
                    <a href="../forum.php" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="../comparar_hardwares.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="../games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="../logout.php">
                    <img src="../assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>
    </div>

<!-- --------Hamburguinho Menu----------  -->
<div class="topnav" >
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
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEisGeKodWjOUp_M44HpvQ14PLkC7qOwjOvA_5uYAu4DlZNM2AFe3R-yKJ9r55z45b7-d_Hggi8yDld2nYMNhK7cAsyKS7tp8frqkhW7IXk1QWC3_E76TECfzdaxwu3Pnu4I3ZM7oHLHBV-3/s1600/HNcapa.jpg"
                            class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Hollow Knight</h2>
                        <h5>Hollow Knight é um jogo eletrônico de ação e aventura desenvolvido e publicado pela Team
                            Cherry em fevereiro de 2017. Ambientado em um mundo vasto e misterioso, o jogo segue a
                            jornada de um cavaleiro sem nome em sua busca por explorar as profundezas de Hallownest, uma
                            antiga civilização subterrânea.</h5>
                        <h5>Com uma atmosfera envolvente e uma jogabilidade desafiadora, Hollow Knight destaca-se por
                            sua exploração meticulosa e combate fluido. Além da campanha principal, o jogo oferece uma
                            variedade de segredos para descobrir, chefes para derrotar e NPCs para interagir,
                            enriquecendo a experiência do jogador.</h5>
                        <h5>Com visuais deslumbrantes e uma trilha sonora cativante, Hollow Knight continua sendo um dos
                            jogos indie mais aclamados, estabelecendo um padrão para o gênero de metroidvania.</h5>
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
                    <a href="https://www.instagram.com/rigrovergames/"><img src="../assets/img/iconinstagram.png"
                            alt=""></a>
                    <a href="https://twitter.com/RigRoverGames"><img src="../assets/img/iconx.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=61556959637519"><img
                        src="../assets/img/iconfacebook.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img
                            src="../assets/img/iconyoutube.png" alt=""></a>
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