<?php
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = $_POST['email'];
    $novaSenha = $_POST['novaSenha'];
    $confirmaSenha = $_POST['confirmaSenha'];

    // Validações adicionais, se necessário...

    // Verifica se o email existe no banco de dados
    $verificaEmail = "SELECT * FROM funcionario WHERE email_adm = '$email'";
    $resultado = $conn->query($verificaEmail);

    if ($resultado->num_rows == 0) {
        echo "<script>alert('Email não encontrado.');window.location.href = 'senha.php';</script>";
        exit();
    }

    // Verifica se a senha digitada é a mesma da senha confirmada
    if ($novaSenha !== $confirmaSenha) {
        echo "<script>alert('As senhas não coincidem.');window.location.href = 'senha.php';</script>";
        exit();
    }

    // Atualiza a senha no banco de dados
    $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    $sql = "UPDATE funcionario SET senha_adm = '$novaSenhaHash' WHERE email_adm = '$email'";

    if ($conn->query($sql) === TRUE) {
        // Exibe um aviso
        echo "<script>alert('Senha alterada com Sucesso.'); window.location.href = 'index.php';</script>";
        exit();
    } else {
        echo "Erro ao atualizar a senha: " . $mysqli->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - RigRover</title>
    <link rel="stylesheet" href="css/senha.css">
</head>

<body>
    <div class="password_esq">
        <div class="titulo">
            <h1>Redefinir senha</h1>
        </div>

        <form action="" method="POST">
            <input type="email" id="email" name="email" placeholder="Insira o seu e-mail" class="email-icon" required>
            <input type="password" id="novaSenha" name="password" placeholder="Insira a sua nova senha" class="senha-icon" required>
            <input type="password" id="confirmaSenha" name="password" placeholder="Insira a sua nova senha novamente" class="senha-icon" required>

            <button type="submit" class="btn-cad">Alterar Senha</button>
        </form>

        <a href="cadastro.php">Não tem uma conta? Cadastre-se aqui.</a><br>
        <a href="login.php">Já tem uma conta? Logue aqui.</a>
    </div>
</body>

</html>