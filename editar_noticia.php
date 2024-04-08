<?php
session_start();

// Verifica se o usuário está logado e tem permissão para editar notícias
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado como admin
    exit;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

// Verifica se o ID da notícia foi passado via GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: noticias.php"); // Redireciona de volta para a página de notícias se o ID não foi fornecido
    exit;
}

$id = $_GET['id'];

// Recupera os dados da notícia do banco de dados com base no ID fornecido
$sql = "SELECT * FROM noticia WHERE id = $id";
$resultado = $mysqli->query($sql);
$noticia = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os novos dados do formulário
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    // Atualiza os dados da notícia no banco de dados
    $sql = "UPDATE noticia SET tipo = '$tipo', titulo = '$titulo', descricao = '$descricao', imagem = '$imagem' WHERE id = $id";
    $resultado = $mysqli->query($sql);

    header("Location: noticiasadm.php"); // Redireciona de volta para a página de notícias após a edição
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Notícia - RigRover</title>
</head>

<body>
    <h1>Editar Notícia</h1>
    <form method="post" action="">
        <label for="tipo">Tipo:</label><br>
        <select id="tipo" name="tipo">
            <option value="hardwares" <?php if ($noticia['tipo'] == 'hardwares') echo 'selected'; ?>>Hardwares</option>
            <option value="eventos" <?php if ($noticia['tipo'] == 'eventos') echo 'selected'; ?>>Eventos</option>
            <option value="games" <?php if ($noticia['tipo'] == 'games') echo 'selected'; ?>>Games</option>
        </select><br>
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" value="<?php echo $noticia['titulo']; ?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"><?php echo $noticia['descricao']; ?></textarea><br>
        <label for="imagem">URL da Imagem:</label><br>
        <input type="text" id="imagem" name="imagem" value="<?php echo $noticia['imagem']; ?>"><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>