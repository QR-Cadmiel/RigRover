<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: login");
    exit;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: forum");
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

    header("Location: forum");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pergunta - RigRover</title>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <link rel="stylesheet" href="assets/css/editar_pergunta.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content">
        <h1>Editar Pergunta</h1>
        <form method="post" action="">
            <div class="form-itens">
                <label for="titulo">Título:</label><br>
                <input type="text" id="titulo" name="titulo" value="<?php echo $pergunta['titulo']; ?>"><br>
                <label for="descricao">Descrição:</label><br>
                <textarea class="descricao-textarea" id="descricao"
                    name="descricao"><?php echo $pergunta['descricao']; ?></textarea><br><br>
                <input type="submit" value="Salvar">
                <a href="forum" class="cancelar-link">Cancelar Edição</a>
            </div>
        </form>
    </div>
</body>

</html>