<?php
include 'conexao.php';
include 'validacao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link rel="stylesheet" href="assets/css/noticias.css">
    <script src="assets/noticias.js"></script>
</head>

<body>
  <div class="content">
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
            <li>
                    <a href="home.php" id="btn-nav">Página Inicial</a>
                </li>
                <li>
                    <a href="#servicos" id="btn-nav">Serviços</a>
                </li>
                <li>
                    <a href="noticias.php" id="btn-nav">Noticias</a>
                </li>
                <li>
                   <a href="eventos.php"id="btn-nav" >Eventos</a>
                </li>
                <li>
                    <a href="forum.php" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="comparar_hardwares.php" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="#" id="btn-nav">Wiki Jogos</a>
                </li>
                 <a href="logout.php">
                 <img src="img\logout.png" alt="Botão de sair da conta" class="img-logout">
                 </a>    
            </ul>
        </nav>
        <div class="main-content">
            <input type="text" name="name" placeholder="Pesquise a notícia que deseja" class="noticia-icon" oninput="pesquisarNoticia()" required>

            <h3>Categorias</h3>

            <div class="categories">
                <button class="btn-hardware" onclick="filtrarNoticias('hardware')">Hardwares</button>
                <button class="btn-hardware" onclick="filtrarNoticias('eventos')">Eventos</button>
                <button class="btn-hardware" onclick="filtrarNoticias('games')">Games</button>
                <button class="btn-hardware" onclick="filtrarNoticias('todos')">Todos</button>
            </div>

            <div class="noticias">
                <div class="ntc1" onclick="abrirNoticia(this)" id="hardware1">
                    <h4>RigRover faz parceria com empresa de hardware, Pichau</h4>
                    <p>Novas parcerias foram anunciadas entre RigRover e a renomada empresa de hardware, Pichau. Essa colaboração promete trazer inovações emocionantes para o mundo dos jogos e tecnologia.</p>
                    <img src="img/iconfacebook.png" alt="notícia 1">
                </div>

                <div class="ntc2" onclick="abrirNoticia(this)" id="hardware2">
                    <h4>Produtos entram em promoção até 25/05/2025</h4>
                    <p>Aproveite as promoções especiais da RigRover! Uma variedade de produtos estará com desconto por tempo limitado. Não perca essa oportunidade de atualizar seu setup de jogos.</p>
                    <img src="img/iconyoutube.png" alt="notícia 2">
                </div>

                <div class="ntc3" onclick="abrirNoticia(this)" id="games1">
                    <h4>Mihoyo anuncia novo personagem em Genshin Impact</h4>
                    <p>Prepare-se para receber um novo personagem em Genshin Impact! Mihoyo revelou detalhes sobre o mais recente herói que em breve estará disponível para os jogadores.</p>
                    <img src="img/iconinstagram.png" alt="notícia 3">
                </div>

                <div class="ntc4" onclick="abrirNoticia(this)" id="hardware3">
                    <h4>RigRover lança nova linha de placas de vídeo</h4>
                    <p>Descubra a mais recente linha de placas de vídeo da RigRover. Com tecnologia de ponta e desempenho incomparável, essas placas são perfeitas para gamers exigentes.</p>
                    <img src="img/iconfacebook.png" alt="notícia 1">
                </div>

                <div class="ntc5" onclick="abrirNoticia(this)" id="games2">
                    <h4>Nintendo revela detalhes sobre novo console portátil</h4>
                    <p>A Nintendo compartilhou novas informações sobre seu próximo console portátil. Saiba mais sobre os recursos e jogos exclusivos que virão com esse lançamento.</p>
                    <img src="img/iconyoutube.png" alt="notícia 2">
                </div>

                <div class="ntc6" onclick="abrirNoticia(this)" id="eventos1">
                    <h4>Evento de e-sports premiará vencedores com viagem internacional</h4>
                    <p>Participe do emocionante evento de e-sports organizado pela RigRover. Além da competição acirrada, os vencedores terão a oportunidade de ganhar uma viagem internacional como prêmio.</p>
                    <img src="img/iconinstagram.png" alt="notícia 3">
                </div>

                <div class="ntc7" onclick="abrirNoticia(this)" id="hardware4">
                    <h4>Ryzen anuncia nova geração de processadores</h4>
                    <p>Prepare-se para o lançamento da nova geração de processadores Ryzen. Com melhorias significativas de desempenho e eficiência, esses processadores prometem revolucionar o mercado.</p>
                    <img src="img/iconfacebook.png" alt="notícia 1">
                </div>

                <div class="ntc8" onclick="abrirNoticia(this)" id="games3">
                    <h4>PlayStation revela data de lançamento de novo jogo exclusivo</h4>
                    <p>A espera acabou! O PlayStation anunciou a data de lançamento de seu próximo jogo exclusivo. Marque seu calendário e esteja pronto para embarcar nessa emocionante jornada.</p>
                    <img src="img/iconyoutube.png" alt="notícia 2">
                </div>

                <div class="ntc9" onclick="abrirNoticia(this)" id="eventos2">
                    <h4>Conferência de tecnologia anuncia palestras com especialistas do setor</h4>
                    <p>Participe da conferência de tecnologia e tenha acesso a palestras exclusivas ministradas por especialistas do setor. Explore as últimas tendências e descubra o futuro da tecnologia.</p>
                    <img src="img/iconinstagram.png" alt="notícia 3">
                </div>
            </div>

            <div class="noticia-popup" id="noticia-popup">
                <div class="noticia-content">
                    <span class="fechar" onclick="fecharNoticia()">X</span>
                    <img src="" alt="Imagem da Notícia" id="noticia-imagem">
                    <h2 id="noticia-titulo"></h2>
                    <p id="noticia-texto"></p>
                    <button onclick="fecharNoticia()">Voltar</button>
                </div>
            </div>
        </div>
    </div>
        <footer>
            <div id="tudo-footer">
                <div class="conteudo-footer">
                    <img src="img\mascoterigrover.png" alt="" class="img-footer">
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

                            <a href="https://www.instagram.com/rigrovergames/"><img src="img\iconinstagram.png" alt=""></a>
                            <a href="https://twitter.com/RigRoverGames"><img src="img\iconx.png" alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="img\iconfacebook.png" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="img\iconyoutube.png" alt=""></a>
                        </div>

                        <li>
                            <a href="fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li>
                            <a href="politicas_de_privacidade.html">Politicas de Privacidade</a>
                        </li>
                        <li>
                            <a href="termo_e_condicoes.html">Termos e Condições</a>
                        </li>
                    </div>
                </div>
            </div>
        </footer>
     </body>
</html>