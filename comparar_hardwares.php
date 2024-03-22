<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparador de Peças de Computador</title>
</head>

<body>
  <header>
    <h1>Comparador de Peças</h1>
  </header>

  
  <main>
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
        <option value="gabinete">Gabinete</option>
        <option value="cooler-cpu">Cooler para CPU</option>
        <option value="coolers-de-gabinete">Coolers de Gabinete</option>
        <option value="placa-de-rede">Placa de Rede</option>
        <option value="placa-de-captura">Placa de Captura</option>
        <option value="placa-de-som">Placa de Som</option>
        <option value="drive-optico">Drive Óptico (CD/DVD/Blu-ray)</option>
        <option value="teclado">Teclado</option>
        <option value="mouse">Mouse</option>
        <option value="monitor">Monitor</option>
        <option value="webcam">Webcam</option>
        <option value="headset">Headset</option>
        <option value="caixa-de-som">Caixa de Som</option>
        <option value="microfone">Microfone</option>
        <option value="hub-usb">Hub USB</option>
        <option value="cabo-de-alimentacao">Cabo de Alimentação</option>
        <option value="cabo-hdmi">Cabo HDMI</option>
        <option value="cabo-vga">Cabo VGA</option>
        <option value="cabo-rj45">Cabo RJ45 (Ethernet)</option>
        <option value="adaptador-wifi">Adaptador Wi-Fi</option>
        <option value="adaptador-bluetooth">Adaptador Bluetooth</option>
      </select>

      <div class="peca-container">
        <label for="peca1">Peça 1:</label>
        <input type="text" id="peca1" name="peca1" placeholder="Digite o modelo da peça" required>
      </div>

      <div class="peca-container">
        <label for="peca2">Peça 2:</label>
        <input type="text" id="peca2" name="peca2" placeholder="Digite o modelo da peça" required>
      </div>

      <button type="submit">Comparar</button>
    </form>

    <div id="resultados"></div>
  </main>

  <script src="assets/comparar_hardwares.js"></script>
</body>

</html>
