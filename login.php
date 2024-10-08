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
                header('Location: home');
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
    <title>Entrar - RigRover</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets\css\responsividade\login-responsivo.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <img src="assets\img\imglado-2.jpg" alt="Imagem Lado" class="img-lado">

    <div class="btn-voltar">
        <a href="index">
            <button>
                Voltar
            </button></a>
    </div>

    <div class="login">
        <div class="titulo">
            <p>Entrada do Usuários</p>
        </div>
        <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="email" name="email" placeholder="Insira o seu e-mail" class="email-icon" required>
            <input type="password" name="password" placeholder="Insira a sua senha" class="senha-icon" required>

            <button type="submit" class="btn-cad">Entrar</button>
        </form>

        <a href="cadastro">Não tem uma conta? Cadastre-se aqui.</a><br>
        <a href="redefinir_senha">Esqueceu a sua senha?</a>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    
    if (status === 'success') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'success',
            title: 'Usuário cadastrado com sucesso!'
        });
    }
});
</script>

</body>

</html>