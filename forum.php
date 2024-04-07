<?php
date_default_timezone_set('America/Sao_Paulo');


include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO perguntas (titulo, descricao) VALUES ('$titulo', '$descricao')";
    $resultado = $mysqli->query($sql);

    header("Location: forum.php");
    exit();
}

$sql = "SELECT * FROM perguntas";
$resultado = $mysqli->query($sql);
$perguntas = array();

while ($pergunta = $resultado->fetch_assoc()) {
    $perguntas[] = $pergunta;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/forum.css">
    <link rel="stylesheet" href="assets\css\responsividade\forum-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
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
                    <a href="games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="logout.php">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>

        <!-- --------Hamburguinho Menu----------  -->
        <div class="topnav">
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

        <div class="main-content">
            <h3>Fórum Rig Rover</h3>
            <div class="noticias">
                <h3>Criar Nova Pergunta</h3>

                <form method="post" action="">
                    <div class="criar-pergunta">
                        <div class="titulo-criar">
                            <label for="titulo">Título:</label>
                            <textarea id="titulo" name="titulo" rows="4" required></textarea>
                        </div>
                        <div class="descricao-criar">
                            <label for="descricao">Descrição:</label>
                            <textarea id="descricao" name="descricao" rows="4" required></textarea>
                        </div>
                    </div>
                    <input class="btn-criar" type="submit" value="Criar Pergunta">
                </form>

                <?php foreach ($perguntas as $pergunta) : ?>
                    <div class="pergunta">
                        <h2><a href="pergunta.php?id=<?php echo $pergunta['id']; ?>&titulo=<?php echo urlencode($pergunta['titulo']); ?>" class="titulo-pergunta"><?php echo $pergunta['titulo']; ?></a></h2>
                        <p><?php echo $pergunta['descricao']; ?></p>
                        <?php
                        $sql = "SELECT COUNT(*) AS total FROM chat1 WHERE pergunta_id = '" . $pergunta['id'] . "'";
                        $result = $mysqli->query($sql);
                        $row = $result->fetch_assoc();
                        $numero_elementos = $row['total'];

                        if ($numero_elementos > 0) {
                            $ultimaMensagemQuery = "SELECT mensagem, data_envio FROM chat1 WHERE pergunta_id = '" . $pergunta['id'] . "' ORDER BY id DESC LIMIT 1";
                            $ultimaMensagemResult = $mysqli->query($ultimaMensagemQuery);
                            $ultimaMensagemRow = $ultimaMensagemResult->fetch_assoc();
                            $ultimaMensagem = $ultimaMensagemRow['mensagem'];
                            $data_envio = $ultimaMensagemRow['data_envio'];
                            $textoIntervalo = "";
                            if ($data_envio) {
                                $data_envio = strtotime($data_envio);
                                $agora = time();
                                $diff = $agora - $data_envio;
                                if ($diff < 60) {
                                    $textoIntervalo = "Agora";
                                } elseif ($diff < 3600) {
                                    $textoIntervalo = floor($diff / 60) . " min atrás";
                                } elseif ($diff < 86400) {
                                    $textoIntervalo = floor($diff / 3600) . " horas atrás";
                                } else {
                                    $textoIntervalo = date("d/m/Y H:i:s", $data_envio);
                                }
                            }
                        } else {
                            $textoIntervalo = "Nenhuma mensagem";
                        }

                        echo '<div class="elements-csv">';
                        echo '<img src="https://icones.pro/wp-content/uploads/2021/05/message-ballons-symbole-noir.png" alt="Ícone" />';
                        echo '<p class="numero-elementos">' . $numero_elementos . '</p>';
                        echo '<p class="ultima-mensagem">' . $textoIntervalo . '</p>';
                        echo '</div>';
                        ?>
                    </div>
                <?php endforeach; ?>

            </div>
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