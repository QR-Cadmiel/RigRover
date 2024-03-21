<?php
include 'conexao.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(32));
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'chickitopizzaria@gmail.com';
        $mail->Password = 'vvzq vjfc vtog dscn';
        $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_SMTPS';
        $mail->Port = 587;


        $mail->setFrom('chickitopizzaria@gmail.com');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Redefinir Senha - Chikito Pizzaria';
        $mail->Body = 'Clique no link a seguir para redefinir sua senha: ' .
            '<a href="http://localhost//rigrover/RigRover/senha.php?token=' . $token . '">Redefinir Senha</a>';
        $mail->send();

        echo "<script>alert('Um email com as instruções para redefinir a senha foi enviado para o seu email.'); window.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "Erro no envio do email: {$mail->ErrorInfo}";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - RigRover</title>
    <link rel="stylesheet" href="css/redefinir_senha.css">
</head>

<body>
    <div class="password_esq">
        <div class="titulo">
            <h1>Redefinir senha</h1>
        </div>

        <form action="redefinir_senha.php" method="POST">
            <input type="email" name="email" placeholder="Insira o seu e-mail" class="email-icon" required>

            <button type="submit" class="btn-cad">Enviar E-mail</button>
        </form>

        <a href="cadastro.php">Não tem uma conta? Cadastre-se aqui.</a><br>
        <a href="login.php">Já tem uma conta? Logue aqui.</a>
    </div>
</body>


</html>