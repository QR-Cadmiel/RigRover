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
    <script src="assets/js/dropdownuser.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/logout.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <a href="noticias.php" id="btn-nav">Notícias</a>
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
                <div class="dropdown">
                    <a href="#" onclick="toggleDropdown(event)"><img class="dropbtn" src="assets/img/imagemuserdrop.png" alt=""></a>
                    <div class="dropdown-content">
                        <a class="btn-dropdown" href="#" onclick="confirmLogout()">Sair</a>
                    </div>
                </div>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav">
            <div class="active">
                <a href="#myLinks"></a>
            </div>

            <div id="myLinks">
                <a href="home.php">Página Inicial</a>
                <a href="noticias.php">Notícias</a>
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
                                src="assets\img\logoswiki\gtavlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Grand Theft Auto 5</h5>
                </div>

                <div class="cs2">
                    <div class="square-gm">
                        <a href="games/cs2.php"><img
                                src="assets\img\logoswiki\cs2logowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Counter-Strike 2</h5>
                </div>

                <div class="valorant">
                    <div class="square-gm">
                        <a href="games/valorant.php"><img
                                src="assets\img\logoswiki\valorantlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Valorant</h5>
                </div>

                <div class="transformice">
                    <div class="square-gm">
                        <a href="games/transformice.php"><img
                                src="assets\img\logoswiki\transformicelogowiki.png" alt=""></a>
                    </div>
                    <h5>Transformice</h5>
                </div>

                <div class="roblox">
                    <div class="square-gm">
                        <a href="games/roblox.php"><img
                                src="assets\img\logoswiki\robloxlogowiki.png" alt=""></a>
                    </div>
                    <h5>Roblox</h5>
                </div>
            </div>

            <h2>Você pode gostar</h2>

            <div class="jogos-gst">
                <div class="atomic-heart">
                    <div class="square-gm">
                        <a href="games/atomic_heart.php"><img
                                src="assets\img\logoswiki\atomiclogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Atomic Heart</h5>
                </div>

                <div class="rayman-legends">
                    <div class="square-gm">
                        <a href="games/rayman_legends.php"><img
                                src="assets\img\logoswiki\raymanlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Rayman Legends</h5>
                </div>

                <div class="happy-wheels">
                    <div class="square-gm">
                        <a href="games/happy_wheels.php"><img
                                src="assets\img\logoswiki\happywelogowiki.png" alt=""></a>
                    </div>
                    <h5>Happy Whells</h5>
                </div>

                <div class="genshin-impact">
                    <div class="square-gm">
                        <a href="games/genshin_impact.php"><img
                                src="assets\img\logoswiki\genshinlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Genshin Impact</h5>
                </div>

                <div class="honkai:star-rail">
                    <div class="square-gm">
                        <a href="games/honkai_star_rail.php"><img
                                src="assets\img\logoswiki\HKSTlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Honkai: Star Rail</h5>
                </div>

                <div class="honkai-impact-3rd">
                    <div class="square-gm">
                        <a href="games/honkai_impact_3rd.php"><img
                                src="assets\img\logoswiki\HKImpactlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Honkai Impact 3rd</h5>
                </div>

                <div class="rocket-league">
                    <div class="square-gm">
                        <a href="games/rocket_league.php"><img
                                src="assets\img\logoswiki\rocketlogowiki.png" alt=""></a>
                    </div>
                    <h5>Rocket League</h5>
                </div>

                <div class="monster-legends">
                    <div class="square-gm">
                        <a href="games/monster_legends.php"><img
                                src="assets\img\logoswiki\monsterlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Monster Legends</h5>
                </div>

                <div class="dragon-city">
                    <div class="square-gm">
                        <a href="games/dragon_city.php"><img
                                src="assets\img\logoswiki\dragcitylogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Dragon City</h5>
                </div>

                <div class="hollow-knight">
                    <div class="square-gm">
                        <a href="games/hollow_knight.php"><img
                                src="assets\img\logoswiki\HolloyKlogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Hollow Knight</h5>
                </div>

                <div class="cuphead">
                    <div class="square-gm">
                        <a href="games/cuphead.php"><img
                                src="assets\img\logoswiki\cupheadlogowiki.png" alt=""></a>
                    </div>
                    <h5>Cuphead</h5>
                </div>

                <div class="kogama">
                    <div class="square-gm">
                        <a href="games/kogama.php"><img
                                src="assets\img\logoswiki\kogamalogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>KoGaMa</h5>
                </div>

                <div class="free-fire">
                    <div class="square-gm">
                        <a href="games/free_fire.php"><img
                                src="assets\img\logoswiki\freefirelogowiki.png"
                                alt=""></a>
                    </div>
                    <h5>Free Fire</h5>
                </div>

                <div class="minecraft">
                    <div class="square-gm">
                        <a href="games/minecraft.php"><img
                                src="assets\img\logoswiki\minecraftlogowiki.png"
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