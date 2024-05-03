<?php

$hostname = "localhost";
$database = "db_rigrover";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$sql = "SELECT nome, email, mensagem FROM fale_conosco";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Nome</th><th>Email</th><th>Mensagem</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nome"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["mensagem"]) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados";
}

// Fechar conexão
$mysqli->close();
?>

<head>
    <link rel="stylesheet" href="assets\css\tabela_fale_conosco.css">
    <link rel="stylesheet" href="assets\css\responsividade\tabela-responsivo.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<script>
    function voltarPagina() {
        window.history.back();
    }
</script>


<body>
    <button onclick="voltarPagina()">Voltar</button>
</body>