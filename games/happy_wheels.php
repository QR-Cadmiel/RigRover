<?php

include '../conexao.php';
include '../validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - Happy Wheels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/games-info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets\css\responsividade\games-info-responsivo.css">
    <script src="../assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/logourl.png">
    <script src="../assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

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
                    <a href="../hardware.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="../games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="#" onclick="confirmLogout2()">
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
            <a href="../hardware.php">Hardware</a>
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
            <h2>Happy Wheels</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/3777bebd-6d5d-4699-8e51-32846df1f8d7/dgpgamc-c5770f9f-4d4d-4e1a-a098-e9bffa469e17.jpg/v1/fill/w_600,h_340,q_75,strp/happy_wheels__by_thomaslandry16_dgpgamc-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzQwIiwicGF0aCI6IlwvZlwvMzc3N2JlYmQtNmQ1ZC00Njk5LThlNTEtMzI4NDZkZjFmOGQ3XC9kZ3BnYW1jLWM1NzcwZjlmLTRkNGQtNGUxYS1hMDk4LWU5YmZmYTQ2OWUxNy5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.wQwmWFQNF1TOPmV2E3jhXy0RIxNW1XFSeJynYBHs4bk" alt="Primeiro Slide" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://pbs.twimg.com/media/CdX6XLkUUAA6f2d.jpg"alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://media.indiedb.com/images/games/1/71/70609/happy-wheels.png" alt="Terceiro Slide">
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
                        <div class="rightevento1">

                            <h5>Happy Wheels é um jogo eletrônico de plataforma e corrida desenvolvido e publicado pela
                                Fancy Force. Lançado inicialmente em 2010, o jogo ganhou popularidade devido à sua jogabilidade 
                                única e altamente desafiadora.</h5>
                            <h5>Com uma variedade de personagens e veículos peculiares, Happy Wheels oferece uma experiência
                                de jogo
                                cheia de diversão e humor. Os jogadores podem criar e compartilhar seus próprios níveis, o
                                que contribui
                                para uma comunidade ativa e em constante crescimento. Apesar de seus gráficos simples, Happy 
                                Wheels compensa com sua jogabilidade viciante e uma enorme
                                quantidade de conteúdo gerado pelos usuários. Desde corridas até obstáculos perigosos, o
                                jogo oferece
                                uma experiência emocionante e muitas vezes hilária para jogadores de todas as idades.</h5>
                        </div>
                    </div>
                </div>
                <div>
           <h2>Trailer do jogo</h2>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/RCyEWnT_Nrc?si=dPj0gWb2CL-okfeC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                            <a href="../fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li>
                        <a href="../politicas_de_privacidade.php">Políticas de Privacidade</a>
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