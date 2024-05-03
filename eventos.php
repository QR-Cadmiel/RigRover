<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"
        href="https://media.discordapp.net/attachments/1097493454545764472/1207911558559170601/Nova_Logo_RigRover_1.png?ex=65e15e4d&is=65cee94d&hm=1f91b588742806550adf33275c874fa2149d9f66260d040373d4f8d2c32371e8&=&format=webp&quality=lossless&width=450&height=600">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/eventos.css">
    <link rel="stylesheet" href="assets\css\responsividade\eventos-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <title>Eventos - RigRover</title>
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

    </div>

    <div class="images-evt">
        <div class="img1">
            <img src="assets/img/evento1.jpeg" alt="">
            <h1>Evento BGS</h1>
            <h5>A Brasil Game Show é uma feira anual de videogames organizada pelo empresário Marcelo Tavares,
                atualmente realizada em São Paulo, Brasil.</h5>
            <button><a href="evento1.php"
                    style="border: none; background: none; padding: 0; font: inherit; color: white; text-decoration: none;">Ler
                    mais</a></button>
        </div>

        <div class="img2">
            <img src="assets/img/evento2.jpg" alt="">
            <h1>Anime Friends</h1>
            <h5>O Anime Friends é um evento anual dedicado à cultura pop japonesa, que inclui anime, mangá, cosplay e
                muito mais. Realizado no Brasil, é uma celebração da paixão compartilhada por fãs de anime e cultura
                geek.</h5>
            <button><a href="evento2.php"
                    style="border: none; background: none; padding: 0; font: inherit; color: white; text-decoration: none;">Ler
                    mais</a></button>
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
                        <a href="politicas_de_privacidade.php">Políticas de Privacidade</a>
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