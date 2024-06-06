<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparador de Hardwares - RigRover</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/comparar_hardwares.css">
  <link rel="stylesheet" href="assets\css\responsividade\comparar-hardwares-responsivo.css">
  <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
  <script src="assets/js/hamburguinho.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <nav class="navbar">
    <ul>
      <li>
        <a href="hardware.php">Hardware - Home</a>
      </li>
      <div class="dropdown">
                <a class="dropdown-btn" aria-haspopup="menu">
                    <span>Ferramentas</span>
                    <span class="arrow"></span>
                </a>
                    <ul class="dropdown-content" role="menu">
                        <li style="--delay: 1;"><a href="maquinas_recomendadas.php" id="btn-nav-drop">Máquinas recomendadas</a></li>
                        <li style="--delay: 2;"><a href="comparar_hardwares.php" id="btn-nav-drop">Comparar hardwares</a></li>
                        <li style="--delay: 3;"><a href="ferramenta.php" id="btn-nav-drop">Requisitos para jogos</a></li>
                    </ul>
                </div>
                <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        const dropdown = document.querySelector('.dropdown');
                        dropdown.addEventListener('click', function() {
                    this.classList.toggle('open');
                    });
                    });
                    </script>
      <li>
        <a href="forum.php">Fórum</a>
      </li>
      <li>
        <a href="home.php">Home</a>
      </li>
    </ul>
    <a href="#" onclick="confirmLogout()">
      <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
    </a>
  </nav>

  <!-- --------Hamburguinho Menu----------  -->
  <div class="topnav">
    <div class="active">
      <a href="#myLinks"></a>
    </div>

    <div id="myLinks">
      <a href="hardware.php">Hardware - Home</a>
      <a href="maquinas_recomendadas.php">Máquinas recomendadas</a>
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
    <h5>Essa ferramenta é capaz de analisar dois Hardwares diferentes e te dizer qual é o melhor em vários aspectos.
    </h5>
  </div>


  <main>
    <div class="ferramenta-analise">
      <form id="pecaForm">
        <label for="tipoPeca">Selecione o tipo de peça:</label>
        <select id="tipoPeca" name="tipoPeca" required>
          <option value="">Selecione...</option>
          <option value="processador">Processador</option>
          <option value="placa-mae">Placa-mãe</option>
          <option value="memoria-ram">Memória RAM</option>
          <option value="placa-de-video">Placa de Vídeo</option>
          <option value="disco-rigido">Disco Rígido (HDD)</option>
          <option value="ssd">Unidade de Estado Sólido (SSD)</option>
          <option value="cooler-cpu">Cooler para CPU</option>
        </select>

        <div id="extraFields"></div>

        <button type="submit">Comparar</button>
      </form>

      <div id="resultados"></div>
    </div>
  </main>

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

  <script src="assets/js/comparar_hardwares.js"></script>

</body>

</html>