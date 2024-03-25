<?php

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["confirm_password"]) && isset($_POST["day"]) && isset($_POST["month"]) && isset($_POST["year"]) && isset($_POST["nationality"])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $nationality = $_POST["nationality"];

        $dob = "$year-$month-$day";

        $sql = "INSERT INTO clientes (email, name, password, date_of_birth, nationality) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            if ($password === $confirm_password) {

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $stmt->bind_param('sssss', $email, $name, $hashed_password, $dob, $nationality);

                if ($stmt->execute()) {
                    echo '<script>alert("Usuário cadastrado com sucesso!");window.location.href("home.php");</script>';
                } else {
                    echo 'Erro ao cadastrar usuário.';
                }

                $stmt->close();
            } else {
                echo 'As senhas não coincidem.';
                $mysqli->connect_error;
            }
        } else {
            echo 'Erro ao preparar a consulta';
        }
    } else {
        echo 'Por favor, preencha todos os campos do formulário.';
    }
}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link rel="stylesheet" href="assets\css\responsividade\cadastro-responsivo.css">
    <link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/1097493454545764472/1207911558559170601/Nova_Logo_RigRover_1.png?ex=65e15e4d&is=65cee94d&hm=1f91b588742806550adf33275c874fa2149d9f66260d040373d4f8d2c32371e8&=&format=webp&quality=lossless&width=450&height=600">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Cadastro - RigRover</title>
</head>

<body>
    <img src="assets/img/imglado.png" alt="Imagem Lado" class="img-lado">
    <div class="btn-voltar">
        <a href="index.php">
            <button>
                Voltar
            </button></a>
    </div>
    <div class="cadastro">
        <div class="titulo">
            <p>Cadastro de Usuários</p>
        </div>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Insira o nome de usuário" class="nome-icon" required>
            <input type="email" name="email" placeholder="Insira o seu e-mail" class="email-icon" required>
            <input type="password" name="password" placeholder="Digite uma senha (Mínimo 8 caracteres)" class="senha-icon" required>
            <input type="password" name="confirm_password" placeholder="Digite sua senha novamente" class="senha-icon" required>

            <div class="data">
                <select name="day" required class="sday">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
                <select name="month" class="smonth" required>
                    <?php
                    $months = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                    foreach ($months as $key => $month) {
                        $monthNum = $key + 1;
                        echo "<option value=\"$monthNum\">$month</option>";
                    }
                    ?>
                </select>
                <select name="year" class="syear" required>
                    <?php
                    $currentYear = date("Y");
                    $startYear = $currentYear - 100;
                    for ($i = $currentYear; $i >= $startYear; $i--) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="nacionalidade">
                <select name="nationality" class="natioa-div" required>
                    <option value="" disabled selected>Selecione o país onde vive</option>
                    <option value="Afeganistão" data-country-code="af">Afeganistão</option>
                    <option value="Alemanha" data-country-code="de">Alemanha</option>
                    <option value="Argentina" data-country-code="ar">Argentina</option>
                    <option value="Austrália" data-country-code="au">Austrália</option>
                    <option value="Brasil" data-country-code="br">Brasil</option>
                    <option value="Canadá" data-country-code="ca">Canadá</option>
                    <option value="China" data-country-code="cn">China</option>
                    <option value="Coreia do Sul" data-country-code="kr">Coreia do Sul</option>
                    <option value="Egito" data-country-code="eg">Egito</option>
                    <option value="Espanha" data-country-code="es">Espanha</option>
                    <option value="Estados Unidos" data-country-code="us">Estados Unidos</option>
                    <option value="França" data-country-code="fr">França</option>
                    <option value="Índia" data-country-code="in">Índia</option>
                    <option value="Indonésia" data-country-code="id">Indonésia</option>
                    <option value="Irã" data-country-code="ir">Irã</option>
                    <option value="Itália" data-country-code="it">Itália</option>
                    <option value="Japão" data-country-code="jp">Japão</option>
                    <option value="México" data-country-code="mx">México</option>
                    <option value="Nigéria" data-country-code="ng">Nigéria</option>
                    <option value="Paquistão" data-country-code="pk">Paquistão</option>
                    <option value="Reino Unido" data-country-code="gb">Reino Unido</option>
                    <option value="Rússia" data-country-code="ru">Rússia</option>
                    <option value="Turquia" data-country-code="tr">Turquia</option>
                    <option value="África do Sul" data-country-code="za">África do Sul</option>
                    <option value="Arábia Saudita" data-country-code="sa">Arábia Saudita</option>
                    <option value="Bangladesh" data-country-code="bd">Bangladesh</option>
                    <option value="Bélgica" data-country-code="be">Bélgica</option>
                    <option value="Colômbia" data-country-code="co">Colômbia</option>
                    <option value="Dinamarca" data-country-code="dk">Dinamarca</option>
                    <option value="Emirados Árabes Unidos" data-country-code="ae">Emirados Árabes Unidos
                    </option>
                    <option value="Filipinas" data-country-code="ph">Filipinas</option>
                    <option value="Finlândia" data-country-code="fi">Finlândia</option>
                    <option value="Grécia" data-country-code="gr">Grécia</option>
                    <option value="Holanda" data-country-code="nl">Holanda</option>
                    <option value="Hong Kong" data-country-code="hk">Hong Kong</option>
                    <option value="Hungria" data-country-code="hu">Hungria</option>
                    <option value="Irlanda" data-country-code="ie">Irlanda</option>
                    <option value="Malásia" data-country-code="my">Malásia</option>
                    <option value="Marrocos" data-country-code="ma">Marrocos</option>
                    <option value="Noruega" data-country-code="no">Noruega</option>
                    <option value="Nova Zelândia" data-country-code="nz">Nova Zelândia</option>
                    <option value="Peru" data-country-code="pe">Peru</option>
                    <option value="Polônia" data-country-code="pl">Polônia</option>
                    <option value="Portugal" data-country-code="pt">Portugal</option>
                    <option value="República Tcheca" data-country-code="cz">República Tcheca</option>
                    <option value="Suécia" data-country-code="se">Suécia</option>
                    <option value="Suíça" data-country-code="ch">Suíça</option>
                    <option value="Tailândia" data-country-code="th">Tailândia</option>
                    <option value="Taiwan" data-country-code="tw">Taiwan</option>
                    <option value="Vietnã" data-country-code="vn">Vietnã</option>
                </select>
            </div>

            <button class="btn-cad" type="submit">Cadastrar</button>
        </form>
        <a href="login.php">Já tem uma conta? Logue aqui.</a>
    </div>
</body>

</html>