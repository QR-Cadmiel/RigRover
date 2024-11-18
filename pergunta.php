<?php
date_default_timezone_set('America/Sao_Paulo');

include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

// Lista de palavras proibidas
$palavras_proibidas = array('estruprador', 'estuprado', 'estuprador', 'estuprar', 'estupro',
'l.o.l.i', 'l0l1', 'l0l1z1nh4', 'l0li', 'lloli', 'lol1', 'loli', 'lolicon', 'lolismo', 'lolli',
'n-word', 'n1gg3r', 'n1gg4', 'n1gga', 'nazism', 'nazismo', 'nazista',
'nigg4', 'nigga', 'nigger',
'p3d0f1l0', 'ped0f1l14', 'ped0fil0', 'pedofilia', 'pedofilo',
'porno', 'pornô',
'r4id',
'tr4aveco', 'tr4v3c0', 'tr4vec0', 'trav3c0', 'travecão', 'traveco', 'travecozinho',
'xvideos', 'zoofilia'); // Substitua com suas palavras reais

if (isset($_GET['id'])) {
    $pergunta_id = $_GET['id'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
    $pergunta_id = isset($_POST['pergunta_id']) ? $_POST['pergunta_id'] : '';

    if (!empty($mensagem) && !empty($pergunta_id)) {
        $nome_usuario = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        
        // Verifica se a mensagem contém palavras proibidas
        $mensagem_proibida = false;
        foreach ($palavras_proibidas as $palavra) {
            if (stripos($mensagem, $palavra) !== false) {
                $mensagem_proibida = true;
                break;
            }
        }

        // Se não for proibida, insere a mensagem no banco de dados
        if (!$mensagem_proibida) {
            $data_atual = date('Y-m-d H:i:s');
            $mysqli->query("INSERT INTO chat1 (nome, mensagem, data_envio, pergunta_id) VALUES ('$nome_usuario', '$mensagem', '$data_atual', '$pergunta_id')");
        }
        // Se for proibida, a mensagem simplesmente não é salva e não é exibido nenhum alerta
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $ultimaMensagemID = isset($_GET['ultima_mensagem_id']) ? intval($_GET['ultima_mensagem_id']) : 0;
    $mensagens_query = "SELECT nome, mensagem, data_envio, id FROM chat1 WHERE pergunta_id = $pergunta_id AND id > $ultimaMensagemID ORDER BY id DESC";
    $mensagens_result = $mysqli->query($mensagens_query);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum:
        <?php echo isset($_GET['titulo']) ? htmlspecialchars($_GET['titulo']) : "Pergunta"; ?>
    </title>
    <link rel="stylesheet" href="assets/css/pergunta.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <script src="assets/js/logout.js"></script>
    <script type="text/javascript">
        var ultimaMensagemID = 0;

        function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function () {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('mensagens').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php?pergunta_id=<?php echo $pergunta_id; ?>&ultima_mensagem_id=' + ultimaMensagemID, true);
            req.send();
        }

        setInterval(function () {
            ajax();
        }, 1000);
    </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="rigrover-1">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="home" id="btn-nav">Página Inicial</a>
                </li>
                <li>
                    <a href="noticias" id="btn-nav">Notícias</a>
                </li>
                <li>
                    <a href="eventos" id="btn-nav">Eventos</a>
                </li>
                <li>
                    <a href="forum" id="btn-nav">Fórum</a>
                </li>
                <li>
                    <a href="comparar_hardwares" id="btn-nav">Hardware</a>
                </li>
                <li>
                    <a href="games.php" id="btn-nav">Wiki Jogos</a>
                </li>
                <a href="#" onclick="confirmLogout()">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
            </ul>
        </nav>

        <div id="header">
            <h1 id="pergunta_titulo">
                <?php echo isset($_GET['titulo']) ? htmlspecialchars($_GET['titulo']) : "Pergunta"; ?>
            </h1>
            <a id="voltar" href="forum">Voltar</a>
        </div>

        <div id="mensagens">
        </div>

    </div>
    </div>
    <div class="main-content">
        <form method="post" action="" id="form-mensagem">
            <input type="text" name="mensagem" placeholder="Digite sua mensagem..." id="mensagem">
            <input type="hidden" name="pergunta_id" value="<?php echo $pergunta_id; ?>">
        </form>
    </div>

</body>

</html>

<?php
$mysqli->close();
?>