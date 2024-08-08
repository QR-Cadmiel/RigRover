<?php

include '../conexao.php';
include '../validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - Cuphead</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/games-info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets\css\responsividade\games-info-responsivo.css">
    <script src="../assets/js/hamburguinho.js"></script>
    <script src="../assets/js/dropdownuser.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/logourl.png">
    <script src="../assets/js/logout.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <div class="rigrover-1">
    <nav class="navbar">
            <ul>
                <li>
                    <a href="../home" id="btn-nav">Página Inicial</a>
                </li>
                <li>
                    <a href="../noticias" id="btn-nav">Noticias</a>
                </li>
                <li>
                    <a href="../eventos" id="btn-nav">Eventos</a>
                </li>
                <li>
                    <a href="../forum" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="../hardware" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="../games" id="btn-nav">Wiki Jogos</a>
                </li>
                <div class="dropdown">
                    <a href="#" onclick="toggleDropdown(event)"><img class="dropbtn" src="../assets/img/imagemuserdrop.png" alt=""></a>
                    <div class="dropdown-content">
                        <a class="btn-dropdown" href="#" onclick="confirmLogout()">Sair</a>
                    </div>
                </div>
            </ul>
        </nav>
    </div>

    <!-- --------Hamburguinho Menu----------  -->
    <div class="topnav">
        <div class="active">
            <a href="#myLinks"></a>
        </div>

        <div id="myLinks">
            <a href="../home">Página Inicial</a>
            <a href="../noticias">Noticias</a>
            <a href="../eventos">Eventos</a>
            <a href="../forum">Fórum</a>
            <a href="../hardware">Hardware</a>
            <a href="../games">Wiki Jogos</a>
            <a href="../logout">Deslogar da Conta</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- ----------------------------------------- -->

    <div class="container">
        <div class="evt-ct">
       <h2>Cuphead</h2>
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://files.tecnoblog.net/wp-content/uploads/2019/07/cuphead.jpg" alt="Primeiro Slide" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://s2-techtudo.glbimg.com/6pQtuj8Ic-4VillFa4yRGB_cagc=/0x0:1000x563/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/V/j/3k9xroTKCUJ9zEVolxyg/cuphead.jpeg"alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://rollingstone.uol.com.br/media/_versions/cactonio_spinoza_em_cuphead_foto_reproducao_mdhr_widelg.jpg" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            <div class="images-evt">
                <div class="img1">
                    <div class="leftevent1">
                    </div>
                    <div class="rightevento1">
                 
                        <h5>Cuphead é um jogo eletrônico de ação e plataforma desenvolvido e publicado pelo Studio MDHR
                            em setembro de 2017. Com uma estética inspirada nos desenhos animados da década de 1930, o
                            jogo segue as aventuras dos irmãos Cuphead e Mugman, que devem derrotar uma série de chefes
                            para pagar uma dívida com o Diabo. </h5>
                            Com seu estilo visual único e desafiador gameplay, Cuphead se destaca por seus chefes
                            elaborados e por sua trilha sonora envolvente. Além da campanha para um jogador, o jogo
                            oferece a opção de jogar em modo cooperativo, onde dois jogadores podem controlar Cuphead e
                            Mugman simultaneamente.Com animações deslumbrantes e uma dificuldade cativante, Cuphead 
                            conquistou fãs ao redor do mundo, sendo aclamado por sua originalidade e desafio, 
                            estabelecendo um novo padrão para indie.</h5>
                    </div>
                </div>
            </div>
            <div>
                <h2>Trailer do jogo</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NN-9SQXoi50?si=Ylm5Idb4Vqn_HoLt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>


    </div>

    <div class="btn-voltar-mi">
        <a href="../games"><button class="btn-voltar">Voltar para Games</button></a>
    </div>

    <footer>
        <div class="cont-1">
            <img src="..\assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
            <ul>
                <li><a href="../index">Página Inicial</a></li>
                <li><a href="#../quem-somos">Quem Somos?</a></li>
                <li><a href="#../equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
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
                        <a href="../fale_conosco">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="../politicas_de_privacidade">Políticas de Privacidade</a>
                    </li>
                    <li>
                        <a href="../termo_e_condicoes">Termos e Condições</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>