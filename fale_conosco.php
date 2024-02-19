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
    <title>Fale Conosco</title>
</head>
<body>
    <h2>Entre em contato</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- O atributo action do formulário foi atualizado para enviar os dados para a mesma página -->
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
