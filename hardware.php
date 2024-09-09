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

    <link rel="shortcut icon" type="image/png" href="assets/img/logourl.png">
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/hardware.css">
    <link rel="stylesheet" href="assets/css/responsividade/hardware-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <script src="assets/js/dropdownuser.js"></script>
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
                <div class="custom-dropdown">
                    <a href="#" onclick="toggleDropdown(event)">
                        <img class="custom-dropbtn" src="assets/img/imagemuserdrop.png" alt="">
                    </a>
                    <div class="custom-dropdown-content">
                        <a class="custom-btn-dropdown" href="#" onclick="confirmLogout()">Sair</a>
                    </div>
                </div>
                <script>
                    function toggleDropdown(event) {
                        event.preventDefault();
                        const dropdown = event.currentTarget.closest('.custom-dropdown');
                        dropdown.classList.toggle('show');
                    }

                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown");
                            for (var i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    }
                </script>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu---------- -->
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
        <!-- ---------------------------------------- -->

        <div class="centro">
            <img src="assets/img/logo2.png" alt="" class="logodois">
            <p class="slogan">Bem-vindo a seção de Hardwares do RigRover!</p>
            <p class="slogan">Sua jornada no mundo dos hardwares começa aqui.</p>
        </div>
    </div>

<div class="tudo">
    <div class="categoria_div1" id="hardware">
    <div class="categoria_conteudo">
        <img class="categoria_foto" src="assets/img/imghome1.png" alt="Imagem de hardware">
        <div class="categoria_texto_conteudo">
            <h2>Encontre as máquinas mais recomendadas</h2>
            <p>Descubra as configurações mínimas e recomendadas ideais para otimizar o desempenho do seu PC, 
                alinhadas com as suas necessidades específicas!</p>
            <a href="maquinas_recomendadas" id="btn-categorias">
                <button type="submit">Confira</button>
            </a>
        </div>
    </div>
</div>
<div class="categoria_div2">
    <div class="categoria_conteudo">
        <div class="categoria_texto_conteudo">
            <h2>Comparar hardwares</h2>
            <p>Escolha dois hardwares da mesma categoria e veja qual dos dois é melhor para você!</p>
            <a href="comparar_hardwares" id="btn-categorias">
                <button type="submit">Confira a comparação de hardwares</button>
            </a>
        </div>
        <img class="categoria_foto" src="https://media.discordapp.net/attachments/820976935077281843/1282779700175048917/img-pcs.png?ex=66e09931&is=66df47b1&hm=1ef62974108bdc61129401f06d5109fd4e8d7e087f9ebfb42d996325cbe19f3d&=&format=webp&quality=lossless&width=479&height=455" alt="Comparar hardwares">
    </div>
</div>

<div class="categoria_div3">
    <div class="categoria_conteudo2">
        <div class="categoria_texto_conteudo">
            <h2>Requisitos para jogos</h2>
            <p>Descubra quais as configurações mínimas e recomendadas para jogar os jogos dos seus sonhos!</p>
            <a href="ferramenta" id="btn-categorias">
                <button type="submit">Confira os requisitos dos jogos</button>
            </a>
        </div>
        <img class="categoria_foto" src="https://media.discordapp.net/attachments/820976935077281843/1282780366503018517/image_82.png?ex=66e099d0&is=66df4850&hm=3f8103f8f5e653e1c8e6e0446c4127b66b51aaf949c6066dc4f3be927b0589e4&=&format=webp&quality=lossless&width=487&height=393" alt="Requisitos para jogos">
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
                    window.open('https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg', '_blank');
                });
            </script>
            <ul>
                <li><a href="fale_conosco">Fale Conosco</a></li>
                <li><a href="politicas_de_privacidade">Políticas de Privacidade</a></li>
                <li><a href="termo_e_condicoes">Termos e Condições</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
