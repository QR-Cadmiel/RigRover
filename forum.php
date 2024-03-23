<?php

include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="pt-br">

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
            <div class="noticias">
                <?php
                $perguntas = array(
                    array("id" => "pergunta1", "titulo" => "Como que eu troco o processador?", "descricao" => "Gostaria de saber como posso trocar o processador do meu compu..."),
                    array("id" => "pergunta2", "titulo" => "Como que eu compro um produto?", "descricao" => "Estou interessado em comprar um produto específico, mas nã..."),
                    array("id" => "pergunta3", "titulo" => "Posso ter múltiplas contas?", "descricao" => "Gostaria de saber se é permitido ter mais de uma conta cadastr..."),
                    array("id" => "pergunta4", "titulo" => "Como posso formar uma parceria?", "descricao" => "Estou interessado em estabelecer uma parceria com a sua empres...")
                );

                foreach ($perguntas as $pergunta) {
                    $sql = "SELECT COUNT(*) AS total FROM conversa WHERE pergunta_id = '" . $pergunta['id'] . "'";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $numero_elementos = $row['total'];
                        }
                    } else {
                        $numero_elementos = 0;
                    }

                    $sqlUltimaMensagem = "SELECT MAX(data_hora) AS ultima_mensagem FROM conversa WHERE pergunta_id = '" . $pergunta['id'] . "'";
                    $resultUltimaMensagem = $mysqli->query($sqlUltimaMensagem);

                    $dataUltimaMensagem = "";

                    if ($resultUltimaMensagem->num_rows === 1) {
                        $rowUltimaMensagem = $resultUltimaMensagem->fetch_assoc();
                        $dataUltimaMensagem = $rowUltimaMensagem['ultima_mensagem'];
                    }

                    if (!empty($dataUltimaMensagem)) {
                        $dataAtual = new DateTime();
                        $dataUltima = new DateTime($dataUltimaMensagem);
                        $intervalo = $dataAtual->diff($dataUltima);

                        if ($intervalo->y > 0) {
                            $textoIntervalo = "há " . $intervalo->y . " ano(s)";
                        } elseif ($intervalo->m > 0) {
                            $textoIntervalo = "há " . $intervalo->m . " mês(es)";
                        } elseif ($intervalo->d > 0) {
                            $textoIntervalo = "há " . $intervalo->d . " dia(s)";
                        } elseif ($intervalo->h > 0) {
                            $textoIntervalo = "há " . $intervalo->h . " hora(s) e " . $intervalo->i . " minuto(s)";
                        } elseif ($intervalo->i > 0) {
                            $textoIntervalo = "há " . $intervalo->i . " minuto(s) e " . $intervalo->s . " segundo(s)";
                        } else {
                            $textoIntervalo = "há " . $intervalo->s . " segundo(s)";
                        }

                        echo '<div class="pergunta">';
                        echo '<h2><a href="pergunta.php?id=' . $pergunta['id'] . '" class="titulo-pergunta">' . $pergunta['titulo'] . '</a></h2>';
                        echo '<p>' . $pergunta['descricao'] . '</p>';
                        echo '<div class="elements-csv">';
                        echo '<img src="https://icones.pro/wp-content/uploads/2021/05/message-ballons-symbole-noir.png" alt="Ícone" />';
                        echo '<p class="numero-elementos">' . $numero_elementos . '</p>';
                        echo '<p class="ultima-mensagem">' . $textoIntervalo . '</p>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="pergunta">';
                        echo '<h2><a href="pergunta.php?id=' . $pergunta['id'] . '" class="titulo-pergunta">' . $pergunta['titulo'] . '</a></h2>';
                        echo '<p>' . $pergunta['descricao'] . '</p>';
                        echo '<div class="elements-csv">';
                        echo '<img src="https://icones.pro/wp-content/uploads/2021/05/message-ballons-symbole-noir.png" alt="Ícone" />';
                        echo '<p class="numero-elementos">' . $numero_elementos . '</p>';
                        echo '<p class="ultima-mensagem">Nenhuma mensagem encontrada</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                $mysqli->close();
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