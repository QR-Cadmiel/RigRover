<?php

include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

    if (!empty($nome) && !empty($mensagem)) {
        $mysqli->query("INSERT INTO chat1 (nome, mensagem) VALUES ('$nome', '$mensagem')");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script type="text/javascript">
        function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php', true);
            req.send();
        }

        setInterval(function() {
            ajax();
        }, 1000);
    </script>
</head>

<body>
    <div id='chat'></div>
    <form method="post" action="pergunta.php">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="mensagem" placeholder="Mensagem">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
