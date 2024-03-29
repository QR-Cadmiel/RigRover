<?php

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }

    $nome = mysqli_real_escape_string($mysqli, $nome);
    $email = mysqli_real_escape_string($mysqli, $email);
    $mensagem = mysqli_real_escape_string($mysqli, $mensagem);

    $sql = "INSERT INTO fale_conosco (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso!";
        header("Location: pedido_enviado.php");
        exit;
    } else {
        echo "Erro ao enviar mensagem: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/faleconosco.css">
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/1097493454545764472/1207911558559170601/Nova_Logo_RigRover_1.png?ex=65e15e4d&is=65cee94d&hm=1f91b588742806550adf33275c874fa2149d9f66260d040373d4f8d2c32371e8&=&format=webp&quality=lossless&width=450&height=600">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Fale Conosco - RigRover</title>
</head>

<body>
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

    <div class="container">
        <div class="text-dicas">
            <h1>Fale Conosco</h1>
            <p>Preencha o formulário para esclarecermos dúvidas, receber seu feedback, discutir parcerias ou oferecer suporte técnico. Após enviar o formulário a nossa equipe entrará em contato o mais breve possível</p>
        </div>

        <div class="tudo">
            <h1>Entre em contato</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="mensagem">Mensagem:</label><br>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
                <input type="submit" value="Enviar" class="btn-primary ">
            </form>
        </div>
    </div>

</body>

</html>