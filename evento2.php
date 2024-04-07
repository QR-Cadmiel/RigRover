<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Anime Friends</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/eventos-info.css">
    <link rel="stylesheet" href="assets\css\responsividade\eventos-info-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
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

    <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav" >
            <div class="active">
             <a href="#myLinks"></a>
        </div>
  
        <div id="myLinks">
            <a href="home.php">Página Inicial</a>
            <a href="noticias.php">Noticias</a>
            <a href="eventos.php">Eventos</a>
            <a href="forum.php">Fórum</a>
            <a href="comparar_hardwares.php">Hardware</a>
            <a href="games.php">Wiki Jogos</a>
            <a href="logout.php">Deslogar da Conta</a>
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
                        <img src="https://aumanack.com.br/wp-content/uploads/2022/07/789e28c3-5cd4-421b-b6dc-d8f7c421957e-scaled-e1657552357853.jpg" class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Anime Friends</h2>
                        <h5>O Anime Friends é um evento anual dedicado à cultura pop japonesa, que inclui anime, mangá, cosplay e muito mais. Realizado no Brasil, é uma celebração da paixão compartilhada por fãs de anime e cultura geek.</h5>
                        <h5>O Anime Friends está de volta! A partir do dia 8 de abril de 2024, São Paulo será palco deste incrível evento de cultura pop japonesa. Prepare-se para mergulhar em um mundo de entretenimento, cosplay, palestras e muito mais. Não perca!</h5>
                        <h5>Localização: São Paulo, Brasil</h5>
                        <h5>Data: 4 de abril de 2024</h5>
                        <h5>Como entrar: Adquira ingressos online ou no local</h5>
                    </div>

                </div>
            </div>

            <div class="ticket">
                <h1>Ingresso para entrada no Anime Friends</h1>
                <div class="venda1">
                    <div class="leftvenda1">
                        <img class="img-venda" src="https://pbs.twimg.com/media/D3GKddhXkAA8nYX.jpg" alt="">
                    </div>

                    <div class="rightvenda1">
                        <h2 style="color: red">̶d̶e̶:̶ R̶$̶̶9̶5̶,̶9̶9̶</h2>
                        <h2 style="color: #24FF00">por: R$40,00</h2>
                        <h4>Descrição:</h4>
                        <h5>Sua porta de entrada para a maior festa da cultura pop japonesa está aqui! Com nosso ingresso exclusivo para o Anime Friends, você terá acesso a um mundo de diversão e entretenimento. Explore o universo dos animes e mangás, participe de concursos de cosplay emocionantes e conheça outros fãs apaixonados. Não perca essa oportunidade única de se juntar à comunidade otaku e criar memórias inesquecíveis. Garanta seu ingresso agora e prepare-se para uma experiência que vai mudar sua forma de ver a cultura japonesa!</h5>
                    </div>
                </div>
                <div class="undervenda1">
                    <button class="btn-ticket">Comprar</button>
                </div>
            </div>
        </div>


    </div>

    <div class="btn-voltar-mi">
        <a href="eventos.php"><button class="btn-voltar">Voltar para Eventos</button></a>
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