<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RigRover</title>
    <link rel="icon" type="image/png" href="https://github.com/QR-Cadmiel/RigRover/blob/master/img/logout.png">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
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
        <div class="centro">
            <img src="img\logo2.png" alt="" class="logodois">
            <p class="slogan">Bem-vindo ao Rig Rover!</p>
            <p class="slogan">Sua jornada no mundo dos games começa aqui.</p>
        </div>
    </div>
 <div class="categoria_div1" id="hardware" >
       
            <div class="categorias" id="servicos">
                <img class="categoria_foto" src="img\eventoshome.png">
            </div>
            <div id="coluna-categoria">
                <h2>Eventos</h2>
            <p class="categoria_texto">Descubra os eventos mais emocionantes do mundo dos games e garanta sua 
                participação. Desde conferências de desenvolvedores até competições de eSports, temos tudo para 
                você.</p>

                <a href="#" id="btn-categorias">
                    <button>
                     Explore os jogos
                    </button>
                </a>
            </div>
        </div>

        <div class="categoria_div2">
            
    <div class="categorias">
                <img class="categoria_foto" src="img\hardwarehome.png">
                
            </div>
            <div id="coluna-categoria"> 
            <div class="titulo_categoria"></div>

            <h2>Hardware</h2>

            <p class="categoria_texto">Encontre as melhores opções de hardware para aprimorar sua experiência de jogo. 
                Desde placas de vídeo poderosas até periféricos de última geração, nós temos as recomendações certas 
                para você.</p>
                <a href="#" id="btn-categorias">
                    <button>
                     Explore o Hardware
                    </button>
                </a>
        </div>
    </div>
    <div class="categoria_div3" id="hardware">
       
       <div class="categorias">
           <img class="categoria_foto" src="img\gameshome.png">
       </div>
       <div id="coluna-categoria">
           <h2>Jogos</h2>
       <p class="categoria_texto">Descubra os últimos lançamentos, análises de jogos e notícias sobre o universo dos games.
         Esteja sempre atualizado sobre o que há de melhor para jogar, seja em consoles, PC ou dispositivos móveis.</p>

           <a href="eventos.php" id="btn-categorias">
               <button>
                 Explore os jogos
               </button>
           </a>
       </div>
   </div>
    
 </div>  
    <footer>
        <div id="tudo-footer">
            <div class="conteudo-footer">
                <img src="img\mascoterigrover.png" alt="" class="img-footer">
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