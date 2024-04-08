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

$sql = "DELETE FROM noticia WHERE id = $id";
$resultado = $mysqli->query($sql);

header("Location: noticiasadm.php");
exit();
