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
    <link rel="stylesheet" href="assets/css/editar_noticia.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div id="content">
        <h1>Editar Notícia</h1>
        <form id="editForm" method="post" action="">
            <div class="form-itens">
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
                <a href="noticiasadm.php" class="cancelar-link">Cancelar Edição</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('editForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately

            Swal.fire({
                title: 'Tem certeza?',
                text: "Você deseja realmente editar esta notícia?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#18851b',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, editar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    this.submit();
                }
            });
        });
    </script>
</body>

</html>
