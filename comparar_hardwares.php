<?php

include 'conexao.php';
include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Análise de Hardware para Jogos</title>
  <link rel="stylesheet" href="assets/css/comparar_hardwares.css">
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
        <a href="forum_hardwares.php">Fórum</a>
      </li>
      <li>
        <a href="home.php">Home</a>
      </li>
    </ul>
  </nav>

  <div class="ferramenta-info">
    <h1>O QUE É ESSA FERRAMENTA?</h1>
    <h5>Essa ferramenta é capaz de analisar dois Hardwares diferentes e te dizer qual é o melhor em vários aspectos.</h5>
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
          <option value="fonte-de-alimentacao">Fonte de Alimentação</option>
          <option value="cooler-cpu">Cooler para CPU</option>
        </select>

        <div class="peca-container">
          <label for="Peca1">Peça 1:</label>
          <input type="text" id="peca1" name="peca1" placeholder="Digite o modelo da peça" required>
        </div>

        <div class="peca-container">
          <label for="peca2">Peça 2:</label>
          <input type="text" id="peca2" name="peca2" placeholder="Digite o modelo da peça" required>
        </div>

        <button type="submit">Comparar</button>
      </form>

      <div id="resultados"></div>
    </div>
  </main>

  <footer>
    <div id="tudo-footer">
      <div class="conteudo-footer">
        <img src="assets/img/mascoterigrover.png" alt="" class="img-footer">
        <ul>
          <li>
            <a href="#">Página Inicial</a>
          </li>
          <li>
            <a href="#">Quem Somos?</a>
          </li>
          <li>
            <a href="#">Noticias</a>
          </li>
        </ul>
      </div>
      <div class="conteudo2-footer">
        <div>
          <div class="redes-footer">

            <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png" alt=""></a>
            <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
            <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="assets/img/iconfacebook.png" alt=""></a>
            <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="assets/img/iconyoutube.png" alt=""></a>
          </div>

          <li>
            <a href="fale_conosco.php">Fale Conosco</a>
          </li>
          <li>
            <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
          </li>
          <li>
            <a href="termo_e_condicoes.php">Termos e Condições</a>
          </li>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/comparar_hardwares.js"></script>

</body>

</html>