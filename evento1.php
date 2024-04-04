<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - BGS</title>
    <link rel="stylesheet" href="assets/css/eventos-info.css">
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
    <div class="container">
        <div class="evt-ct">

            <div class="images-evt">
                <div class="img1">
                    <div class="leftevent1">
                        <img src="assets/img/evento1.jpeg" class="imgevento" alt="">
                    </div>
                    <div class="rightevento1">
                        <h2>Evento BGS</h2>
                        <h5>A Brasil Game Show é uma feira anual de videogames organizada por Marcelo Tavares, realizada em São Paulo, Brasil. Desde sua estreia em 2009, tornou-se um dos principais eventos de jogos eletrônicos da América Latina. Oferece lançamentos de jogos, competições, palestras, áreas de cosplay e exposições de produtos e tecnologias, proporcionando uma experiência única para entusiastas, profissionais e o público em geral.</h5>
                        <h5>A Brasil Game Show está de volta! A partir do dia 8 de abril de 2024, São Paulo será palco deste incrível evento de videogames. Prepare-se para mergulhar em um mundo de lançamentos, competições e muito mais. Não perca!</h5>
                        <h5>Localização: São Paulo, Brasil</h5>
                        <h5>Data: 23 de março de 2024</h5>
                        <h5>Como entrar: Adquira ingressos online ou no local</h5>
                    </div>
                </div>
            </div>

            <div class="ticket">
                <h1>Ingresso para entrada na BGS</h1>
                <div class="venda1">
                    <div class="leftvenda1">
                        <img width="600px" src="https://i0.wp.com/mundodrix.com.br/site/wp-content/uploads/2018/09/Aplicativo-Oficial-da-Brasil-Game-Show.png?fit=1090%2C457&ssl=1" alt="">
                    </div>

                    <div class="rightvenda1">
                        <h2 style="color: red">̶d̶e̶:̶ R̶$̶̶2̶4̶5̶,̶9̶9̶</h2>
                        <h2 style="color: #24FF00">por: R$75,99</h2>
                        <h4>Descrição:</h4>
                        <h5>Sua porta de entrada para a maior festa dos videogames está aqui! Com nosso ticket exclusivo para a BGS, você terá acesso a um universo de diversão e entretenimento. Experimente os jogos mais recentes, participe de competições emocionantes e conheça os maiores nomes da indústria. Não perca essa oportunidade única de se juntar à comunidade gamer e criar memórias inesquecíveis. Garanta seu ticket agora e prepare-se para uma experiência que vai mudar sua forma de ver os videogames! </h5>
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