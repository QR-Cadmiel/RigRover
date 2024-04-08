<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações recomendadas para jogos - RigRover</title>
    <link rel="stylesheet" href="assets/css/ferramenta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets\css\responsividade\ferramenta-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
</head>

<body>
    <script>
        function mostrarRequisitos() {
            var jogoSelecionado = document.getElementById("jogo").value;
            var requisitos = "";

            switch (jogoSelecionado) {
                case "tetris":
                    requisitos = "<h2>Tetris</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core i3-2100 or AMD Athlon II X4 640</li>";
                    requisitos += "<li>2 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo integrada Intel HD 3000 or AMD Radeon HD 6310</li>";
                    requisitos += "<li>500 MB de espaço em disco</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core i5-2300 or AMD Phenom II X4 955</li>";
                    requisitos += "<li>4 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo dedicada Nvidia GeForce GTX 460 or AMD Radeon HD 6850</li>";
                    requisitos += "<li>1 GB de espaço em disco</li>";
                    requisitos += "</ul>";
                    break;

                case "supermario64":
                    requisitos = "<h2>Super Mario 64</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Console Nintendo 64</li>";
                    requisitos += "<li>Controle Nintendo 64</li>";
                    requisitos += "<li>Cartucho do jogo Super Mario 64</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Console Nintendo 64 com Expansion Pak</li>";
                    requisitos += "<li>Controle Nintendo 64 com Rumble Pak</li>";
                    requisitos += "<li>Cartucho do jogo Super Mario 64 (versão Shindou Edition)</li>";
                    requisitos += "</ul>";
                    break;

                case "zeldaocarina":
                    requisitos = "<h2>The Legend of Zelda: Ocarina of Time</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Console Nintendo 64</li>";
                    requisitos += "<li>Controle Nintendo 64</li>";
                    requisitos += "<li>Cartucho do jogo The Legend of Zelda: Ocarina of Time</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Console Nintendo 64 com Expansion Pak</li>";
                    requisitos += "<li>Controle Nintendo 64 com Rumble Pak</li>";
                    requisitos += "<li>Cartucho do jogo The Legend of Zelda: Ocarina of Time (versão Master Quest)</li>";
                    requisitos += "</ul>";
                    break;

                case "doom":
                    requisitos = "<h2>Doom</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel 486SX-25 or AMD 386SX-40</li>";
                    requisitos += "<li>4 MB de RAM</li>";
                    requisitos += "<li>Placa de vídeo VGA</li>";
                    requisitos += "<li>40 MB de espaço em disco</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Pentium or AMD 486 DX2</li>";
                    requisitos += "<li>8 MB de RAM</li>";
                    requisitos += "<li>Placa de vídeo Sound Blaster 16</li>";
                    requisitos += "<li>Sound Blaster 16 compatible sound card</li>";
                    requisitos += "</ul>";
                    break;

                case "minecraft":
                    requisitos = "<h2>Minecraft</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core i3-3210 3.2 GHz or AMD A8-7600 APU 3.1 GHz</li>";
                    requisitos += "<li>4 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo Intel HD Graphics 4000 (Ivy Bridge) or AMD Radeon R5 series with OpenGL 4.4</li>";
                    requisitos += "<li>4 GB de espaço em disco</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core i5-4590 or AMD FX 8350</li>";
                    requisitos += "<li>8 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo Nvidia GeForce GTX 750 Ti or AMD Radeon R7 260X</li>";
                    requisitos += "<li>SSD (Solid State Drive)</li>";
                    requisitos += "</ul>";
                    break;

                case "hollowknight":
                    requisitos = "<h2>Hollow Knight</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core 2 Duo E5200</li>";
                    requisitos += "<li>4 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo GeForce 9800GTX+ (1GB)</li>";
                    requisitos += "<li>DirectX: Versão 10</li>";
                    requisitos += "<li>9 GB de espaço em disco</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Intel Core i5</li>";
                    requisitos += "<li>8 GB de RAM</li>";
                    requisitos += "<li>Placa de vídeo GeForce GTX 560</li>";
                    requisitos += "<li>DirectX: Versão 11</li>";
                    requisitos += "<li>9 GB de espaço em disco</li>";
                    requisitos += "</ul>";
                    break;

                case "stardewvalley":
                    requisitos = "<h2>Stardew Valley</h2>";
                    requisitos += "<h3>Requisitos Mínimos</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Windows XP SP3 2.8 GHz or OS X 10.7 or higher, 1.2 GHz processor</li>";
                    requisitos += "<li>256 MB de RAM (512 MB recommended)</li>";
                    requisitos += "<li>256 MB de espaço em disco</li>";
                    requisitos += "</ul>";
                    requisitos += "<h3>Requisitos Recomendados</h3>";
                    requisitos += "<ul>";
                    requisitos += "<li>Processador Windows XP SP3 2.8 GHz or OS X 10.7 or higher, 2 GHz processor</li>";
                    requisitos += "<li>512 MB de RAM</li>";
                    requisitos += "<li>256 MB de espaço em disco</li>";
                    requisitos += "<ul>";
                    break;
                default:
                    requisitos = "Selecione um jogo para ver os requisitos.";
                    break;
            }

            document.getElementById("resultado").innerHTML = requisitos;
        }
    </script>

    <nav class="navbar">
        <ul>
            <li>
                <a href="hardware.php">Hardware - Home</a>
            </li>
            <li>
                <a href="maquinas_recomendadas.php">Máquinas recomendadas</a>
            </li>
            <li>
                <a href="comparar_hardwares.php">Comparar Hardwares</a>
            </li>
            <li>
                <a href="ferramenta.php">Requisitos para jogos</a>
            </li>
            <li>
                <a href="forum.php">Fórum</a>
            </li>
            <li>
                <a href="home.php">Home</a>
            </li>
                <a href="logout.php">
                    <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                </a>
        </ul>
    </nav>

     <!-- --------Hamburguinho Menu----------  -->
     <div class="topnav">
            <div class="active">
                <a href="#myLinks"></a>
            </div>

            <div id="myLinks">
                <a href="hardware.php">Hardware - Home</a>
                <a href="maquinas_recomendadas.php">Máquinas recomendadas</a>
                <a href="comparar_hardwares.php">Comparar hardwares</a>
                <a href="ferramenta.php">Requisitos para jogos</a>
                <a href="forum.php">Fórum</a>
                <a href="home.php">Home</a>
                <a href="logout.php">Deslogar da Conta</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- ----------------------------------------- -->

    <div class="ferramenta-info">
        <h1>O QUE É ESSA FERRAMENTA?</h1>
        <h5>Essa ferramenta é capaz de falar os requisitos mínimos e recomendados para jogar um jogo de sua escolha.</h5>
    </div>

    <div class="ferramenta-analise">
        <form id="hardwareForm" onsubmit="mostrarRequisitos(); return false;">
            <h1>Ferramenta de análise</h1>

            <label for="jogo">Selecione um jogo:</label>
            <div class="custom-select">
                <select id="jogo" name="jogo">
                    <option value="tetris">Tetris</option>
                    <option value="supermario64">Super Mario 64</option>
                    <option value="zeldaocarina">The Legend of Zelda: Ocarina of Time</option>
                    <option value="doom">Doom(1993)</option>
                    <option value="minecraft">Minecraft</option>
                    <option value="hollowknight">Hollow Knight</option>
                    <option value="stardewvalley">Stardew Valley</option>

                </select><br><br>
            </div>
            <button type="submit">Verificar</button>
        </form>
        <div id="resultado"></div>
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
                    <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png" alt=""></a>
                    <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="assets/img/iconfacebook.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="assets/img/iconyoutube.png" alt=""></a>
                </div>
                <ul>
                    <li>
                        <a href="fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
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