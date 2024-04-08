<?php
session_start();

// Verifica se o usuário está logado e tem permissão para excluir notícias
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

// Exclui a notícia do banco de dados com base no ID fornecido
$sql = "DELETE FROM noticia WHERE id = $id";
$resultado = $mysqli->query($sql);

header("Location: noticias.php"); // Redireciona de volta para a página de notícias após a exclusão
exit();
?>
