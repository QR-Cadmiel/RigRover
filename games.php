<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - RigRover</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/games.css">
    <link rel="stylesheet" href="assets\css\responsividade\games-responsivo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/logout.js"></script>

</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">

            <div>
                <img src="assets/img/Nova_Logo_RigRover.png" alt="" class="logonav">
            </div>

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

        <div id="content">
            <h2>Jogos em destaque</h2>
            <div class="jogos-dstq">
                <div class="gtav">
                    <div class="square-gm">
                        <a href="games/gtav.php"><img
                                src="https://i.pinimg.com/originals/90/9a/21/909a21ef77e6ac03e061a1a6fc6255e1.png"
                                alt=""></a>
                    </div>
                    <h5>Grand Theft Auto 5</h5>
                </div>

                <div class="cs2">
                    <div class="square-gm">
                        <a href="games/cs2.php"><img
                                src="https://cdn.freebiesupply.com/logos/thumbs/2x/counter-strike-global-offensive-2-logo.png"
                                alt=""></a>
                    </div>
                    <h5>Counter-Strike 2</h5>
                </div>

                <div class="valorant">
                    <div class="square-gm">
                        <a href="games/valorant.php"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Valorant_logo_-_pink_color_version.svg/2560px-Valorant_logo_-_pink_color_version.svg.png"
                                alt=""></a>
                    </div>
                    <h5>Valorant</h5>
                </div>

                <div class="transformice">
                    <div class="square-gm">
                        <a href="games/transformice.php"><img
                                src="https://upload.wikimedia.org/wikipedia/en/c/ce/TransformiceLogo.png" alt=""></a>
                    </div>
                    <h5>Transformice</h5>
                </div>

                <div class="roblox">
                    <div class="square-gm">
                        <a href="games/roblox.php"><img
                                src="https://seeklogo.com/images/R/roblox-logo-3CD7ECE135-seeklogo.com.png" alt=""></a>
                    </div>
                    <h5>Roblox</h5>
                </div>
            </div>

            <h2>Você pode gostar</h2>

            <div class="jogos-gst">
                <div class="atomic-heart">
                    <div class="square-gm">
                        <a href="games/atomic_heart.php"><img
                                src="https://static.warthunder.com/upload/image/0_2023/7_July/Atomic/cardicon_atomic_thunder_right_512_caff1023f3740afce35e8f405c12fa6d.png"
                                alt=""></a>
                    </div>
                    <h5>Atomic Heart</h5>
                </div>

                <div class="rayman-legends">
                    <div class="square-gm">
                        <a href="games/rayman_legends.php"><img
                                src="https://i.pinimg.com/originals/70/6e/5e/706e5ecf7dde6c89ddfb8f8ace612e20.png"
                                alt=""></a>
                    </div>
                    <h5>Rayman Legends</h5>
                </div>

                <div class="happy-wheels">
                    <div class="square-gm">
                        <a href="games/happy_wheels.php"><img
                                src="https://image.apktoy.com/img/e8/com.fancyforce.happywheels/icon.png" alt=""></a>
                    </div>
                    <h5>Happy Whells</h5>
                </div>

                <div class="genshin-impact">
                    <div class="square-gm">
                        <a href="games/genshin_impact.php"><img
                                src="https://i.pinimg.com/564x/2c/26/6d/2c266d7c7da0359f065b41702a92042b.jpg"
                                alt=""></a>
                    </div>
                    <h5>Genshin Impact</h5>
                </div>

                <div class="honkai:star-rail">
                    <div class="square-gm">
                        <a href="games/honkai_star_rail.php"><img
                                src="https://cdn2.steamgriddb.com/icon_thumb/e52da5a31de788599378924f0e639557.png"
                                alt=""></a>
                    </div>
                    <h5>Honkai: Star Rail</h5>
                </div>

                <div class="honkai-impact-3rd">
                    <div class="square-gm">
                        <a href="games/honkai_impact_3rd.php"><img
                                src="https://downloadr2.apkmirror.com/wp-content/uploads/2018/09/5b98a17bdb704.png"
                                alt=""></a>
                    </div>
                    <h5>Honkai Impact 3rd</h5>
                </div>

                <div class="rocket-league">
                    <div class="square-gm">
                        <a href="games/rocket_league.php"><img
                                src="https://cdn2.steamgriddb.com/icon/d538fafd2c832e8cb5d424d68dc7f8af.png" alt=""></a>
                    </div>
                    <h5>Rocket League</h5>
                </div>

                <div class="monster-legends">
                    <div class="square-gm">
                        <a href="games/monster_legends.php"><img
                                src="https://play-lh.googleusercontent.com/VOK_EhVN0eFQmk7E1V4mJa-oZoBXQx0rEPqdNSQYO2CP1b9MJEujwjaXoq36zelYjPk"
                                alt=""></a>
                    </div>
                    <h5>Monster Legends</h5>
                </div>

                <div class="dragon-city">
                    <div class="square-gm">
                        <a href="games/dragon_city.php"><img
                                src="https://play-lh.googleusercontent.com/4nTLfOSYPEZGeJKZc3FcD77y-H5r7KtXCWgKxuYptzRIc1j4A9CQdU8Aq8bBvBKrAw"
                                alt=""></a>
                    </div>
                    <h5>Dragon City</h5>
                </div>

                <div class="hollow-knight">
                    <div class="square-gm">
                        <a href="games/hollow_knight.php"><img
                                src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w"
                                alt=""></a>
                    </div>
                    <h5>Hollow Knight</h5>
                </div>

                <div class="cuphead">
                    <div class="square-gm">
                        <a href="games/cuphead.php"><img
                                src="https://archive.org/download/Cuphead_OST/cuphead%20ost.jpg" alt=""></a>
                    </div>
                    <h5>Cuphead</h5>
                </div>

                <div class="kogama">
                    <div class="square-gm">
                        <a href="games/kogama.php"><img
                                src="https://store-images.s-microsoft.com/image/apps.43026.335bac18-789c-4358-bdd3-39d1b752dd83.4d16d634-71aa-453a-ac4d-b35bcf234d99.da065f39-2bb8-4c41-b82c-51c749163cb6"
                                alt=""></a>
                    </div>
                    <h5>KoGaMa</h5>
                </div>

                <div class="free-fire">
                    <div class="square-gm">
                        <a href="games/free_fire.php"><img
                                src="https://upload.wikimedia.org/wikipedia/pt/2/23/Liga_Brasileira_de_Free_Fire_logo.png"
                                alt=""></a>
                    </div>
                    <h5>Free Fire</h5>
                </div>

                <div class="minecraft">
                    <div class="square-gm">
                        <a href="games/minecraft.php"><img
                                src="https://preview.redd.it/minecraft-logo-v0-ak9w918zi5r81.png?auto=webp&s=614e5180aa1f7068676a06351c8edffc86b3b58a"
                                alt=""></a>
                    </div>
                    <h5>Minecraft</h5>
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