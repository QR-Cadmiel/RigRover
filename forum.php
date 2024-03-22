<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link rel="stylesheet" href="assets/css/forum.css">
</head>

<body>

    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="#">Quem Somos?</a>
                </li>
                <li>
                    <a href="#">Noticias</a>
                </li>
            </ul>
        </nav>
        <div class="main-content">
            <input type="text" name="name" placeholder="Pesquise a notícia que deseja" class="noticia-icon"
                oninput="pesquisarNoticia()" required>

            <h3>Categorias</h3>
            <div class="noticias">
                <?php
                // Lista de perguntas
                $perguntas = array(
                    array("id" => "pergunta1", "titulo" => "Como que eu troco o processador?", "descricao" => "Gostaria de saber como posso trocar o processador do meu compu..."),
                    array("id" => "pergunta2", "titulo" => "Como que eu compro um produto?", "descricao" => "Estou interessado em comprar um produto específico, mas nã..."),
                    array("id" => "pergunta3", "titulo" => "Posso ter múltiplas contas?", "descricao" => "Gostaria de saber se é permitido ter mais de uma conta cadastr..."),
                    array("id" => "pergunta4", "titulo" => "Como posso formar uma parceria?", "descricao" => "Estou interessado em estabelecer uma parceria com a sua empres...")
                );

                // Exibir as perguntas
                foreach ($perguntas as $pergunta) {
                    echo '<div class="pgt">';
                    echo '<h4><a href="pergunta.php?id=' . $pergunta["id"] . '">' . $pergunta["titulo"] . '</a></h4>';
                    echo '<p>' . $pergunta["descricao"] . '</p>';
                    echo '<h6>Há 15 horas atrás</h6>';
                    echo '</div>';
                }
                ?>
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

                            <a href="https://www.instagram.com/rigrovergames/"><img src="img\iconinstagram.png"
                                    alt=""></a>
                            <a href="https://twitter.com/RigRoverGames"><img src="img\iconx.png" alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=61556959637519"><img
                                    src="img\iconfacebook.png" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img
                                    src="img\iconyoutube.png" alt=""></a>
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