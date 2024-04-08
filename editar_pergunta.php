<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: login.php");
    exit;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: forum.php");
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM perguntas WHERE id = $id";
$resultado = $mysqli->query($sql);
$pergunta = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE perguntas SET titulo = '$titulo', descricao = '$descricao' WHERE id = $id";
    $resultado = $mysqli->query($sql);

    header("Location: forum.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pergunta - RigRover</title>
</head>

<body>
    <h1>Editar Pergunta</h1>
    <form method="post" action="">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" value="<?php echo $pergunta['titulo']; ?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"><?php echo $pergunta['descricao']; ?></textarea><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>
