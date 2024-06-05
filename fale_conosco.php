<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    $mostrarBotao = false;
} else {
    $mostrarBotao = true;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }

    $nome = mysqli_real_escape_string($mysqli, $nome);
    $email = mysqli_real_escape_string($mysqli, $email);
    $mensagem = mysqli_real_escape_string($mysqli, $mensagem);

    $sql = "INSERT INTO fale_conosco (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Mensagem enviada com sucesso!");';
        echo 'window.location.href = "index.php";</script>';
        exit;
    } else {
        echo "Erro ao enviar mensagem: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"
        href="https://media.discordapp.net/attachments/1097493454545764472/1207911558559170601/Nova_Logo_RigRover_1.png?ex=65e15e4d&is=65cee94d&hm=1f91b588742806550adf33275c874fa2149d9f66260d040373d4f8d2c32371e8&=&format=webp&quality=lossless&width=450&height=600">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/faleconosco.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\responsividade\fale-conosco-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <title>Fale Conosco - RigRover</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="index.php">Página Inicial</a>
            </li>
            <li>
                <a href="#">Quem Somos?</a>
            </li>
            <li>
                <a href="#">Noticias</a>
            </li>
        </ul>
    </nav>

    <!-- --------Hamburguinho Menu----------  -->
    <div class="topnav">
        <div class="active">
            <a href="#myLinks"></a>
        </div>

        <div id="myLinks">
            <a href="index.php">Página Inicial</a>
            <a href="#">Quem Somos?</a>
            <a href="#">Noticias</a>
        </div>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- ----------------------------------------- -->

    <div class="container">
        <div class="text-dicas">
            <h1>Fale Conosco</h1>
            <p>Preencha o formulário para esclarecermos dúvidas, receber seu feedback, discutir parcerias ou oferecer
                suporte técnico. Após enviar o formulário a nossa equipe entrará em contato o mais breve possível</p>
        </div>

        <div class="tudo">
            <h1>Entre em contato</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="mensagem">Mensagem:</label><br>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
                <?php if ($mostrarBotao) { ?>
                    <a href="tabela_fale_conosco.php"><input value="Acessar formulário" class="btn-form-adm"></a>
                <?php } ?>
                <input type="submit" value="Enviar" class="btn-primary ">
            </form>
        </div>
    </div>

    <footer>
        <div class="cont-1">
            <img src="assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#quem-somos">Quem Somos?</a></li>
                <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
            <div>
            <div class="redes-footer">
                            <a id="instarigrover"><img src="assets/img/iconinstagram.png" alt=""></a>
                            <a id="twiterrigrover"><img src="assets/img/iconx.png" alt=""></a>
                            <a id="facerigrover"><img src="assets/img/iconfacebook.png" alt=""></a>
                            <a id="youtuberigrover"><img src="assets/img/iconyoutube.png" alt=""></a>
                        </div>
                        <script>
                            document.getElementById('instarigrover').addEventListener('click', function() {
                            window.open('https://www.instagram.com/rigrovergames/', '_blank');
                            });

                            document.getElementById('twiterrigrover').addEventListener('click', function() {
                            window.open('https://twitter.com/RigRoverGames', '_blank');
                            });

                            document.getElementById('facerigrover').addEventListener('click', function() {
                            window.open('https://www.facebook.com/profile.php?id=61556959637519', '_blank');
                            });

                            document.getElementById('youtuberigrover').addEventListener('click', function() {
                            window.open('https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg', '_blank');
                            });
                            </script>
                <ul>
                    <li>
                        <a href="fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade.php">Políticas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes.php">Termos e Condições</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>