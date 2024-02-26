<?php

include 'conexao.php';
include 'validacao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os dados do formulário foram enviados via método POST

    // Prepara os dados para inserção
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Abre a conexão com o banco de dados (se não estiver aberta)
    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }

    // Escapando caracteres especiais para prevenir injeção de SQL
    $nome = mysqli_real_escape_string($mysqli, $nome);
    $email = mysqli_real_escape_string($mysqli, $email);
    $mensagem = mysqli_real_escape_string($mysqli, $mensagem);

    // Insere os dados na tabela fale_conosco de forma segura para evitar injeção de SQL
    $sql = "INSERT INTO fale_conosco (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso!";
        header("Location: pedido_enviado.php");
        exit;
    } else {
        echo "Erro ao enviar mensagem: " . $sql . "<br>" . $mysqli->error;
    }

    // Fecha a conexão após a execução da consulta
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/faleconosco.css">
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/1097493454545764472/1207911558559170601/Nova_Logo_RigRover_1.png?ex=65e15e4d&is=65cee94d&hm=1f91b588742806550adf33275c874fa2149d9f66260d040373d4f8d2c32371e8&=&format=webp&quality=lossless&width=450&height=600">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Fale Conosco - RigRover</title>
</head>
<body>
<nav class="navbar">
    
    <div>
        <img src="img\Nova_Logo_RigRover.png" alt="" class="logonav">
    </div>

        <ul>
            <li>
                <a href="index.php  ">Página Inicial</a>
            </li>
            <li>
                <a href="#">Quem Somos?</a>
            </li>
            <li>
                <a href="#">Noticias</a>
            </li>
            <li>
                <a href="#">Comprar Hardware</a>
            </li>
        </ul>
    </nav>

    <h2>Entre em contato</h2>

    <div class="tudo">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- O atributo action do formulário foi atualizado para enviar os dados para a mesma página -->
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
        <input type="submit" value="Enviar" class="btn-primary ">
     </form>
    </div>
</body>
</html>
