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

    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/hardware.css">
    <link rel="stylesheet" href="assets\css\responsividade\hardware-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <script src="assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="hardware" id="btn-nav">Hardware - Home</a>
                </li>
                <div class="dropdown">
                <a class="dropdown-btn" aria-haspopup="menu">
                    <span>Ferramentas</span>
                    <span class="arrow"></span>
                </a>
                    <ul class="dropdown-content" role="menu">
                        <li style="--delay: 1;"><a href="maquinas_recomendadas" id="btn-nav-drop">Máquinas recomendadas</a></li>
                        <li style="--delay: 2;"><a href="comparar_hardwares" id="btn-nav-drop">Comparar hardwares</a></li>
                        <li style="--delay: 3;"><a href="ferramenta" id="btn-nav-drop">Requisitos para jogos</a></li>
                    </ul>
                </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        const dropdown = document.querySelector('.dropdown');
                        dropdown.addEventListener('click', function() {
                    this.classList.toggle('open');
                    });
                    });
                    </script>
                <li>
                    <a href="forum" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="home" id="btn-nav">Página Inicial</a>
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
                <a href="hardware">Hardware - Home</a>
                <a href="maquinas_recomendadas">Máquinas recomendadas</a>
                <a href="comparar_hardwares">Comparar hardwares</a>
                <a href="ferramenta">Requisitos para jogos</a>
                <a href="forum">Fórum</a>
                <a href="home">Página Inicial</a>
                <a href="logout">Deslogar da Conta</a>
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
            <img class="categoria_foto"
                src="https://ezectech.com/wp-content/uploads/2023/04/pc-gamer-barato-780x470.png">
        </div>
        <div id="coluna-categoria">
            <h2>Máquinas recomendadas</h2>
            <p class="categoria_texto">Descubra quais as configurações mínimas e recomendadas para utilizar seu PC com
                base no que você precisa!</p>

            <a href="maquinas_recomendadas" id="btn-categorias">
                <button type="submit">
                    Confira as máquinas recomendadas
                </button>
            </a>
        </div>
    </div>

    <div class="categoria_div2">

        <div class="categorias">
            <img class="categoria_foto"
                src="https://www.greatsolution.com.br/wp-content/uploads/2019/01/pc-hardware-detail-1241583-1919x1274-1024x680.jpg">

        </div>
        <div id="coluna-categoria">
            <div class="titulo_categoria"></div>

            <h2>Comparar hardwares</h2>

            <p class="categoria_texto">Escolha dois hardwares da mesma categoria e veja qual dos dois é melhor para
                você!</p>
            <a href="comparar_hardwares" id="btn-categorias">
                <button type="submit">
                    Confira a comparação de hardwares
                </button>
            </a>
        </div>
    </div>
    <div class="categoria_div3" id="hardware">

        <div class="categorias">
            <img class="categoria_foto"
                src="https://www.gamingdebugged.com/wp-content/uploads/2021/09/purple-gaming-set-up-1.jpg">
        </div>
        <div id="coluna-categoria">
            <h2>Requisitos para jogos</h2>
            <p class="categoria_texto">Descubra quais as configurações mínimas e recomendadas para jogar os jogos dos
                seus sonhos!</p>

            <a href="ferramenta" id="btn-categorias">
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
                <li><a href="index">Página Inicial</a></li>
                <li><a href="#quem-somos">Quem Somos?</a></li>
                <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
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
                <ul>
                    <li>
                        <a href="fale_conosco">Fale Conosco</a>
                    </li>
                    <li>
                        <a  a href="politicas_de_privacidade">Políticas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes">Termos e Condições</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>