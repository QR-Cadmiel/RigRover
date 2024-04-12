<?php

include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets\css\responsividade\index-responsivo.css">

    <link rel="icon" type="image/png"
        href="https://github.com/QR-Cadmiel/RigRover/blob/02314bc9c37d2761af50a3c5e0d49ea38bebddcf/img/logourl.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <title>Página Inicial - RigRover</title>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/hamburguinho.js"></script>
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="#quem-somos">Quem Somos?</a>
                </li>
                <li>
                    <a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a>
                </li>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav">
            <div class="active">
                <a href="#myLinks"></a>
            </div>

            <div id="myLinks">
                <a href="index.php">Página Inicial</a>
                <a href="#quem-somos">Quem Somos?</a>
                <a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a>
            </div>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- ----------------------------------------- -->

        <div class="centro">
            <img src="assets/img/logo2.png" alt="" class="logodois">
            <p class="slogan">Equipando Sua Jornada,</p>
            <p class="slogan">Elevando Seu Jogo.</p>
            <div>
                <a href="cadastro.php"><button class="botoes">Cadastrar-se</button></a>

                <a href="login.php"> <button class="botoes">Entrar</button></a>

            </div>
        </div>
    </div>

    <div id="rigrover-2">
        <div class="i1t2" id="quem-somos">
            <img src="assets/img/img-index1.jpg" alt="" class="img-index1">
            <p>Estamos sempre abertos a feedback e novas ideias, pois é com a sua ajuda que podemos continuar evoluindo
                e tornando RigRover ainda melhor. Se você é um entusiasta dos jogos, um jogador competitivo ou alguém
                que simplesmente ama a cultura gaming, você encontrará em RigRover um lar.</p>

            <p>Explore, descubra e aprimore sua experiência de jogo com RigRover. Porque, no fim das contas, é tudo
                sobre
                tornar cada sessão de jogo tão gratificante quanto possível. Junte-se a nós nessa aventura e seja parte
                de uma comunidade que está redefinindo o mundo dos games, uma ferramenta de cada vez. Bem-vindo ao
                futuro
                do gaming. Bem-vindo ao RigRover.</p>
        </div>

        <div class="i2t1">
            <p>Bem-vindo ao RigRover, seu destino final no universo gaming! Nascido da paixão e da inovação, RigRover
                é um site revolucionário criado pela empresa de tecnologia de ponta, Infinite Nexus. Lançado em março de
                2023, nossa missão é simples, porém ambiciosa: unir diversas ferramentas essenciais para gamers em uma
                única plataforma, tornando a experiência de jogar mais acessível, prazerosa e eficiente.</p>

            <p>Entendemos que o mundo dos games é vasto e repleto de desafios, desde encontrar os melhores equipamentos
                até
                otimizar configurações para um desempenho perfeito. É por isso que RigRover veio para ser o seu aliado
                nessa
                jornada, oferecendo desde reviews detalhadas de hardwares até guias de otimização de jogos, passando por
                um
                agregador de preços para você encontrar as melhores ofertas.</p>

            <img src="assets/img/img-index2.jpg" alt="" class="img-index2">
        </div>
    </div>

    <div id="rigrover-3">
        <div class=title-nav>
            <h1 id="equipe-desenvolvedora">Equipe Desenvolvedora</h1>
            <img src="assets/img/logoinfinitenexus.png" alt="" width="200px" height>
        </div>

        <div class="pictures-container">
            <div class="pictures-1">
                <div class="avatar">
                    <div class="cadmiel">
                        <img src="assets/img/cadmiel.png" alt="" width="200px">
                    </div>
                    <div>
                        <h2>Cadmiel Torres</h2>
                        <h3>Desenvolvedor</h3>
                    </div>
                </div>
                <div class="avatar">
                    <div class="pedro">
                        <img src="assets/img/pedro.png" alt="" width="200px">
                    </div>
                    <div>
                        <h2>Pedro Gabriel</h2>
                        <h3>Project Owner</h3>
                    </div>
                </div>
            </div>

            <div class="pictures-2">
                <div class="avatar">
                    <div class="joao">
                        <img src="assets/img/joao.webp" alt="" width="200px">
                    </div>

                    <div>
                        <h2>João Victor</h2>
                        <h3>Desenvolvedor</h3>
                    </div>
                </div>
                <div class="avatar">
                    <div class="thiago">
                        <img src="assets/img/thiago.webp" alt="" width="200px">
                    </div>
                    <div>
                        <h2>Thiago Felipe</h2>
                        <h3>Desenvolvedor</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="rigrover-4">
            <div class="faq-container">
                <h1>Perguntas Frequentes</h1>   
                <div class="faq-item" onclick="toggleFAQ(0)">
                    <div class="faq-question">As notícias são confiáveis? </div>
                    <div class="faq-answer">Sim, a Infinite Nexus passa por um rigoroso
                        processo para selecionar as noticias.</div>
                </div>
                <div class="faq-item" onclick="toggleFAQ(1)">
                    <div class="faq-question">A ferramenta de anilisar hardware funciona?</div>
                    <div class="faq-answer">Sim, a nossa ferramenta de análise de hardware
                        funciona eficientemente em diversos sistemas e configurações,
                        proporcionando diagnósticos precisos sobre o estado do seu hardware.</div>
                </div>

                <div class="faq-item" onclick="toggleFAQ(1)">
                    <div class="faq-question">A criação de uma conta é gratuita?</div>
                    <div class="faq-answer">Sim, a criação de uma conta é 100% gratuita,
                        não será cobrado nada ao criar uma.</div>
                </div>

                <div class="faq-item" onclick="toggleFAQ(1)">
                    <div class="faq-question">Como posso entrar em contato com o suporte caso tenha problemas ou dúvidas?</div>
                    <div class="faq-answer">
                        Para solicitar suporte ou tirar dúvidas, desça até o final da página até encontrar
                        a seção de rodapé. Clique em "Fale Conosco" e preencha o formulário de contato com
                        os detalhes da sua solicitação. Nossa equipe se esforçará para responder o mais breve
                        possível.</div>
                </div>


            </div>




        </div>
        <div class="rirgrover-app">
            <div class="app-left">
                <img class="app-icon"
                    src="https://media.discordapp.net/attachments/1201580849368416446/1228405669091213437/disponivel-google-play-badge.png?ex=662becee&is=661977ee&hm=4e0eeb4dc206d96c30491296069f5fae128ed58ee5fe9ed28a625fd08014b461&=&format=webp&quality=lossless&width=1440&height=426"
                    alt="Play Store">
                <img class="app-icon"
                    src="https://media.discordapp.net/attachments/1201580849368416446/1228394869026852914/appleStore.png?ex=662be2df&is=66196ddf&hm=6ca28a7ffb8b6df1e5089c47bd244a110ed9a3564bef0514e18993277b92ed63&=&format=webp&quality=lossless&width=705&height=210"
                    alt="App Store">
            </div>

            <div class="app-mid">
                <h1>Baixe nosso aplicativo</h1>
            </div>

            <div class="app-right">
                <img src="https://media.discordapp.net/attachments/1201580849368416446/1228397127978319882/PEGbFAAAAAElFTkSuQmCC.png?ex=662be4f9&is=66196ff9&hm=d90e67abfec89b2b3c4697aa28ba0c008adbcb2d9b176ec71ecf23712e5707f4&=&format=webp&quality=lossless&width=497&height=596"
                    alt="">
            </div>
        </div>
        <div id="rigrover-5">
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
                            <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png"
                                    alt=""></a>
                            <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=61556959637519"><img
                                    src="assets/img/iconfacebook.png" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img
                                    src="assets/img/iconyoutube.png" alt=""></a>
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
    </div>
    </footer>
</body>

</html>