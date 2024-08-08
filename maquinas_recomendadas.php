<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recomendações de máquinas - RigRover</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/maquinas_recomendadas.css">
  <link rel="stylesheet" href="assets\css\responsividade\maquinas-rec-responsivo.css">
  <script src="assets/js/hamburguinho.js"></script>
  <script src="assets/js/dropdownuser.js"></script>
  <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
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
        <a href="hardware">Hardware - Home</a>
      </li>
      <div class="dropdown">
                <a class="dropdown-btn" aria-haspopup="menu">
                    <span>Ferramentas</span>
                    <span class="arrow"></span>
                </a>
                    <ul class="dropdown-content" role="menu">
                        <li style="--delay: 1;"><a href="maquinas_recomendadas" id="btn-nav-drop">Máquinas recomendadas</a></li>
                        <li style="--delay: 2;"><a href="comparar_hardwares" id="btn-nav-drop">Comparar hardwares</a></li>
                        <li style="--delay: 3;"><a href="ferramenta" id="btn-nav-drop">Requisitos para jogos</a></li>
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
        <a href="forum">Fórum</a>
      </li>
      <li>
        <a href="home">Home</a>
      </li>
    </ul>
    <div class="custom-dropdown">
                    <a href="#" onclick="toggleDropdown(event)">
                        <img class="custom-dropbtn" src="assets/img/imagemuserdrop.png" alt="">
                    </a>
                    <div class="custom-dropdown-content">
                        <a class="custom-btn-dropdown" href="#" onclick="confirmLogout()">Sair</a>
                    </div>
                </div>
                <script>
                    function toggleDropdown(event) {
                        event.preventDefault();
                        const dropdown = event.currentTarget.closest('.custom-dropdown');
                        dropdown.classList.toggle('show');
                    }

                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown");
                            for (var i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    }
                </script>
  </nav>

  <!-- --------Hamburguinho Menu----------  -->
  <div class="topnav">
    <div class="active">
      <a href="#myLinks"></a>
    </div>

    <div id="myLinks">
      <a href="hardware">Hardware - Home</a>
      <a href="maquinas_recomendadas">Máquinas recomendadas</a>
      <a href="forum">Fórum</a>
      <a href="home">Home</a>
      <a href="logout">Deslogar da Conta</a>
    </div>
    <!-- ----------------------------------------- -->




    <div class="ferramenta-info">
      <h1>O QUE É ESSA FERRAMENTA?</h1>
      <h5>Essa ferramenta é capaz de recomendar um PC para você se baseando no que você precisa.</h5>
    </div>

    <div class="ferramenta-analise">
      <form id="hardwareForm">
        <h1>Ferramenta de Análise</h1>

        <label for="pc">Selecione um tipo de computador:</label>
        <select id="pc" name="pc">
          <option value="streaming">Streaming de Conteúdo</option>
          <option value="gaming">Gaming de Alta Performance</option>
          <option value="trabalho">Trabalho de Produtividade e Multitarefa</option>
          <option value="edicao_video">Edição de Vídeo Profissional</option>
          <option value="design_grafico">Design Gráfico e Criação de Conteúdo</option>
          <option value="office">Uso de Escritório Básico</option>
          <option value="estudante">Uso de Estudante</option>
        </select>

        <button type="submit">Verificar</button>
      </form>

      <div id="resultado"></div>
    </div>
    <footer>
      <div class="cont-1">
        <img src="assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
        <ul>
          <li><a href="index">Página Inicial</a></li>
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
                            </script><div class="redes-footer">
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
              <a href="fale_conosco">Fale Conosco</a>
            </li>
            <li>
              <a href="politicas_de_privacidade">Políticas de Privacidade</a>
            </li>
            <li>
              <a href="termo_e_condicoes">Termos e Condições</a>
            </li>
          </ul>
        </div>
      </div>
  </div>
  </footer>

  <script src="assets/js/maquinas_recomendadas.js"></script>

</body>

</html>