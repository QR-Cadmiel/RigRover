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
  <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
</head>

<body>
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
    </ul>
    <a href="logout.php">
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

  <script src="assets/js/maquinas_recomendadas.js"></script>

</body>

</html>