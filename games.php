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
    <link rel="stylesheet" href="assets/css/games.css">
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
                    <a href="comparar_hardwares.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="logout.php">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>
    </div>


    <div id="content">
        <h2>Jogos em destaque</h2>
        <div class="jogos-dstq">
            <div class="gtav">
                <div class="square-gm">
                    <img src="https://i.pinimg.com/originals/90/9a/21/909a21ef77e6ac03e061a1a6fc6255e1.png" alt="">
                </div>
                <h5>Grand Theft Auto 5</h5>
            </div>

            <div class="cs2">
                <div class="square-gm">
                    <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/counter-strike-global-offensive-2-logo.png" alt="">
                </div>
                <h5>Counter-Strike 2</h5>
            </div>

            <div class="valorant">
                <div class="square-gm">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Valorant_logo_-_pink_color_version.svg/2560px-Valorant_logo_-_pink_color_version.svg.png" alt="">
                </div>
                <h5>Valorant</h5>
            </div>

            <div class="transformice">
                <div class="square-gm">
                    <img src="https://upload.wikimedia.org/wikipedia/en/c/ce/TransformiceLogo.png" alt="">
                </div>
                <h5>Transformice</h5>
            </div>

            <div class="roblox">
                <div class="square-gm">
                    <img src="https://seeklogo.com/images/R/roblox-logo-3CD7ECE135-seeklogo.com.png" alt="">
                </div>
                <h5>Roblox</h5>
            </div>
        </div>

        <h2>Você pode gostar</h2>

        <div class="jogos-gst">
            <div class="atomic-heart">
                <div class="square-gm">
                    <img src="https://static.warthunder.com/upload/image/0_2023/7_July/Atomic/cardicon_atomic_thunder_right_512_caff1023f3740afce35e8f405c12fa6d.png" alt="">
                </div>
                <h5>Atomic Heart</h5>
            </div>

            <div class="rayman-legends">
                <div class="square-gm">
                    <img src="https://i.pinimg.com/originals/70/6e/5e/706e5ecf7dde6c89ddfb8f8ace612e20.png" alt="">
                </div>
                <h5>Rayman Legends</h5>
            </div>

            <div class="happy-wheels">
                <div class="square-gm">
                    <img src="https://image.apktoy.com/img/e8/com.fancyforce.happywheels/icon.png" alt="">
                </div>
                <h5>Happy Whells</h5>
            </div>

            <div class="genshin-impact">
                <div class="square-gm">
                    <img src="https://scontent.fsjk2-1.fna.fbcdn.net/v/t39.30808-6/313426444_3256652527908006_8906085988888765175_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ReCBPALGAewAX8TksVG&_nc_ht=scontent.fsjk2-1.fna&oh=00_AfCoWlstXZ_Q2OB3nyZZYWSIp4uGwP99zYGeb-yXipX95g&oe=66041F25" alt="">
                </div>
                <h5>Genshin Impact</h5>
            </div>

            <div class="honkai:star-rail">
                <div class="square-gm">
                    <img src="https://cdn2.steamgriddb.com/icon_thumb/e52da5a31de788599378924f0e639557.png" alt="">
                </div>
                <h5>Honkai: Star Rail</h5>
            </div>

            <div class="honkai-impact-3rd">
                <div class="square-gm">
                    <img src="https://downloadr2.apkmirror.com/wp-content/uploads/2018/09/5b98a17bdb704.png" alt="">
                </div>
                <h5>Honkai Impact 3rd</h5>
            </div>

            <div class="rocket-league">
                <div class="square-gm">
                    <img src="https://cdn2.steamgriddb.com/icon/d538fafd2c832e8cb5d424d68dc7f8af.png" alt="">
                </div>
                <h5>Rocket League</h5>
            </div>

            <div class="monster-legends">
                <div class="square-gm">
                    <img src="https://play-lh.googleusercontent.com/VOK_EhVN0eFQmk7E1V4mJa-oZoBXQx0rEPqdNSQYO2CP1b9MJEujwjaXoq36zelYjPk" alt="">
                </div>
                <h5>Monster Legends</h5>
            </div>

            <div class="dragon-city">
                <div class="square-gm">
                    <img src="https://play-lh.googleusercontent.com/4nTLfOSYPEZGeJKZc3FcD77y-H5r7KtXCWgKxuYptzRIc1j4A9CQdU8Aq8bBvBKrAw" alt="">
                </div>
                <h5>Dragon City</h5>
            </div>

            <div class="hollow-knight">
                <div class="square-gm">
                    <img src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w" alt="">
                </div>
                <h5>Hollow Knight</h5>
            </div>

            <div class="cuphead">
                <div class="square-gm">
                    <img src="https://archive.org/download/Cuphead_OST/cuphead%20ost.jpg" alt="">
                </div>
                <h5>Cuphead</h5>
            </div>

            <div class="kogama">
                <div class="square-gm">
                    <img src="https://store-images.s-microsoft.com/image/apps.43026.335bac18-789c-4358-bdd3-39d1b752dd83.4d16d634-71aa-453a-ac4d-b35bcf234d99.da065f39-2bb8-4c41-b82c-51c749163cb6" alt="">
                </div>
                <h5>KoGaMa</h5>
            </div>

            <div class="free-fire">
                <div class="square-gm">
                    <img src="https://upload.wikimedia.org/wikipedia/pt/2/23/Liga_Brasileira_de_Free_Fire_logo.png" alt="">
                </div>
                <h5>Free Fire</h5>
            </div>

            <div class="minecraft">
                <div class="square-gm">
                    <img src="https://preview.redd.it/minecraft-logo-v0-ak9w918zi5r81.png?auto=webp&s=614e5180aa1f7068676a06351c8edffc86b3b58a" alt="">
                </div>
                <h5>Minecraft</h5>
            </div>
        </div>
    </div>

    <footer>
        <div id="tudo-footer">
            <div class="conteudo-footer">
                <img src="assets/img/mascoterigrover.png" alt="" class="img-footer">
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

                        <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png" alt=""></a>
                        <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="assets/img/iconfacebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="assets/img/iconyoutube.png" alt=""></a>
                    </div>

                    <li>
                        <a href="fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes.php">Termos e Condições</a>
                    </li>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>