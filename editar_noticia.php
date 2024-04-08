<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: login.php");
    exit;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: noticias.php");
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM noticia WHERE id = $id";
$resultado = $mysqli->query($sql);
$noticia = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    $sql = "UPDATE noticia SET tipo = '$tipo', titulo = '$titulo', descricao = '$descricao', imagem = '$imagem' WHERE id = $id";
    $resultado = $mysqli->query($sql);

    header("Location: noticiasadm.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Notícia - RigRover</title>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
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