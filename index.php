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
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
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
                    <a href="index">Página Inicial</a>
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
                <a href="index">Página Inicial</a>
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
            <p class="slogan">Equipando sua jornada,</p>
            <p class="slogan">elevando seu jogo.</p>
            <div>
                <a href="cadastro"><button class="botoes">Cadastrar-se</button></a>

                <a href="login"> <button class="botoes">Entrar</button></a>

            </div>
        </div>
    </div>

    <div id="rigrover-2">
        <div class="i2t1">
        <p><span class="palavrachave">RigRover</span>, lançado em março de 2023 pela <span class="palavrachave">Infinite Nexus</span>, é uma plataforma <span class="palavrachave">revolucionária</span>
             projetada para <span class="palavrachave">aprimorar</span> a experiência de <span class="palavrachave">gamers</span> ao consolidar análises <span class="palavrachave">detalhadas</span> de 
             hardware, guias de <span class="palavrachave">otimização</span> e um comparativo de preços, tudo em um só lugar.</p>
        <p>Esta plataforma visa <span class="palavrachave">facilitar</span> a busca e otimização de seu setup, tornando a tecnologia 
             <span class="palavrachave">acessível</span> e maximizando o prazer de jogar. Explore o <span class="palavrachave">futuro</span> do gaming com RigRover.</p>


        </div>
        <div class= "img-sobre"><img src="assets/img/img-index2.jpg" alt="" class="img-index2"></div>
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
                            <div class="redes-sociais">
                                <a id="botaogit1"><img src="assets\img\logogit.png" alt=""></a>
                                <a id="botaolinke1"><img src="assets\img\logolinkeding.png" alt=""></a>
                            </div>
                            <script>
                             document.getElementById('botaogit1').addEventListener('click', function() {
                            window.open('https://github.com/QR-Cadmiel', '_blank');
                            });

                        document.getElementById('botaolinke1').addEventListener('click', function() {
                            window.open('', '_blank');
                            });
                            </script>
                    </div>
                </div>
                <div class="avatar">
                    <div class="pedro">
                        <img src="assets/img/pedro.png" alt="" width="200px">
                    </div>
                    <div>
                        <h2>Pedro Gabriel</h2>
                        <h3>Project Owner</h3>
                            <div class="redes-sociais">
                                <a id="botaogit2"><img src="assets\img\logogit.png" alt=""></a>
                                <a id="botaolinke2"><img src="assets\img\logolinkeding.png" alt=""></a>
                            </div>
                            <script>
                             document.getElementById('botaogit2').addEventListener('click', function() {
                            window.open('https://github.com/PedroZxK', '_blank');
                            });

                        document.getElementById('botaolinke2').addEventListener('click', function() {
                            window.open('https://www.linkedin.com/in/pedro-santos-74480726b/', '_blank');
                            });
                            </script>
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
                            <div class="redes-sociais">
                                <a id="botaogit3" ><img src="assets\img\logogit.png" alt=""></a>
                                <a id="botaolinke3" ><img src="assets\img\logolinkeding.png" alt=""></a>
                            </div>
                            <script>
                             document.getElementById('botaogit3').addEventListener('click', function() {
                            window.open('https://github.com/joaovictOr-SR', '_blank');
                            });

                        document.getElementById('botaolinke3').addEventListener('click', function() {
                            window.open('https://www.linkedin.com/in/jo%C3%A3o-victor-santos-ruas-81a80826b/', '_blank');
                            });
                            </script>
                    </div>
                </div>
                <div class="avatar">
                    <div class="thiago">
                        <img src="assets/img/thiago.webp" alt="" width="200px">
                    </div>
                    <div>
                        <h2>Thiago Felipe</h2>
                        <h3>Desenvolvedor</h3>
                            <div class="redes-sociais">
                                <a id="botaogit4"><img src="assets\img\logogit.png" alt=""></a>
                                <a id="botaolinke4" ><img src="assets\img\logolinkeding.png" alt=""></a>
                            </div>
                            <script>
                             document.getElementById('botaogit4').addEventListener('click', function() {
                            window.open('', '_blank');
                            });

                        document.getElementById('botaolinke4').addEventListener('click', function() {
                            window.open('', '_blank');
                            });
                            </script>
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
                <a href="#"><img class="app-icon" src="assets\img\playstore.png" alt="Play Store"></a>
                <a href="#"><img class="app-icon2" src="assets\img\applestore.png" alt="App Store"></a>
            </div>

            <div class="app-mid">
                <h1>Baixe nosso aplicativo</h1>
            </div>

            <div class="app-right">
                <img src="assets\img\celularcomapp.png" alt="uma mão segurando um celular com a logo do RigRover">
            </div>
        </div>
        <div id="rigrover-5">
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
                                <a href="politicas_de_privacidade">Políticas de Privacidade</a>
                            </li>
                            <li>
                                <a href="termo_e_condicoes">Termos e Condições</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    </footer>
</body>

</html>