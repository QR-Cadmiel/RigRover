<?php

session_start();


include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error_message = 'Por favor, preencha todos os campos do formulário.';
    } else {
        $sql = "SELECT id, email, password, name FROM clientes WHERE email = ?";
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->bind_result($id, $dbEmail, $dbPassword, $dbName);

            if ($stmt->fetch() && password_verify($password, $dbPassword)) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $id;
                $_SESSION['email'] = $dbEmail;
                $_SESSION['name'] = $dbName;
                header('Location: home.php');
                exit();
            } else {
                $error_message = 'Credenciais inválidas.';
            }

            $stmt->close();
        } else {
            echo 'Erro ao preparar a declaração: ' . $mysqli->error;
        }
    }
}

$mysqli->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets\css\responsividade\login-responsivo.css">
</head>

<body>
    <img src="assets\img\imglado-2.jpg" alt="Imagem Lado" class="img-lado">

    <div class="btn-voltar">
        <a href="index.php">
            <button>
                Voltar
            </button></a>
    </div>

    <div class="login">
        <div class="titulo">
            <p>Login de Usuários</p>
        </div>
        <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="email" name="email" placeholder="Insira o seu e-mail" class="email-icon" required>
            <input type="password" name="password" placeholder="Insira a sua senha" class="senha-icon" required>

            <button type="submit" class="btn-cad">Login</button>
        </form>

        <a href="cadastro.php">Não tem uma conta? Cadastre-se aqui.</a><br>
        <a href="redefinir_senha.php">Esqueceu a sua senha?</a>
    </div>
</body>

</html>