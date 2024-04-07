<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardwares Home - RigRover</title>
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/hardware.css">
    <link rel="stylesheet" href="assets\css\responsividade\hardware-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="hardware.php" id="btn-nav">Hardware - Home</a>
                </li>
                <li>
                    <a href="maquinas_recomendadas.php" id="btn-nav">Máquinas recomendadas</a>
                </li>
                <li>
                    <a href="comparar_hardwares.php" id="btn-nav">Comparar hardwares</a>
                </li>
                <li>
                    <a href="ferramenta.php" id="btn-nav">Requisitos para jogos</a>
                </li>
                <li>
                    <a href="forum.php" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="home.php" id="btn-nav">Home</a>
                </li>
                <a href="logout.php">
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
                <a href="hardware.php">Hardware - Home</a>
                <a href="maquinas_recomendadas.php">Máquinas recomendadas</a>
                <a href="comparar_hardwares.php">Comparar hardwares</a>
                <a href="ferramenta.php">Requisitos para jogos</a>
                <a href="forum.php">Fórum</a>
                <a href="home.php">Home</a>
                <a href="logout.php">Deslogar da Conta</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- ----------------------------------------- -->

        <div class="centro">
            <img src="assets/img/logo2.png" alt="" class="logodois">
            <p class="slogan">Bem-vindo a seção de Hardwares do RigRover!</p>
            <p class="slogan">Sua jornada no mundo dos hardwares começa aqui.</p>
        </div>
    </div>
    <div class="categoria_div1" id="hardware">

        <div class="categorias" id="servicos">
            <img class="categoria_foto" src="https://ezectech.com/wp-content/uploads/2023/04/pc-gamer-barato-780x470.png">
        </div>
        <div id="coluna-categoria">
            <h2>Máquinas recomendadas</h2>
            <p class="categoria_texto">Descubra quais as configurações mínimas e recomendadas para utilizar seu PC com base no que você precisa!</p>

            <a href="maquinas_recomendadas.php" id="btn-categorias">
                <button type="submit">
                    Confira os requisitos dos jogos
                </button>
            </a>
        </div>
    </div>

    <div class="categoria_div2">

        <div class="categorias">
            <img class="categoria_foto" src="https://www.greatsolution.com.br/wp-content/uploads/2019/01/pc-hardware-detail-1241583-1919x1274-1024x680.jpg">

        </div>
        <div id="coluna-categoria">
            <div class="titulo_categoria"></div>

            <h2>Comparar hardwares</h2>

            <p class="categoria_texto">Escolha dois hardwares da mesma categoria e veja qual dos dois é melhor para você!</p>
            <a href="comparar_hardwares.php" id="btn-categorias">
                <button type="submit">
                    Confira a comparação de hardwares
                </button>
            </a>
        </div>
    </div>
    <div class="categoria_div3" id="hardware">

        <div class="categorias">
            <img class="categoria_foto" src="https://www.gamingdebugged.com/wp-content/uploads/2021/09/purple-gaming-set-up-1.jpg">
        </div>
        <div id="coluna-categoria">
            <h2>Requisitos para jogos</h2>
            <p class="categoria_texto">Descubra quais as configurações mínimas e recomendadas para jogar os jogos dos seus sonhos!</p>

            <a href="ferramenta.php" id="btn-categorias">
                <button type="submit">
                    Confira os requisitos dos jogos
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