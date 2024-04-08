const form = document.getElementById("pecaForm");
const tipoPeca = document.getElementById("tipoPeca");
const extraFields = document.getElementById("extraFields");

tipoPeca.addEventListener("change", function () {
    const selectedOption = tipoPeca.value;

    switch (selectedOption) {
        case "processador":
            addProcessadorFields();
            break;
        case "placa-mae":
            addPlacaMaeFields();
            break;
        case "memoria-ram":
            addMemoriaRamFields();
            break;
        case "placa-de-video":
            addPlacaDeVideoFields();
            break;
        case "disco-rigido":
            addDiscoRigidoFields();
            break;
        case "ssd":
            addSsdFields();
            break;
        case "cooler-cpu":
            addCoolerCpuFields();
            break;
        default:
            extraFields.innerHTML = "";
            break;
    }
});

form.addEventListener("submit", function (event) {
    event.preventDefault();

    const selectedOption = tipoPeca.value;

    switch (selectedOption) {
        case "processador":
            compararProcessador();
            break;
        case "placa-mae":
            compararPlacaMae();
            break;
        case "memoria-ram":
            compararMemoriaRam();
            break;
        case "placa-de-video":
            compararPlacaDeVideo();
            break;
        case "disco-rigido":
            compararDiscoRigido();
            break;
        case "ssd":
            compararSsd();
            break;
        case "cooler-cpu":
            compararCoolerDeCpu();
            break;
        default:
            alert("Por favor, selecione um tipo de peça válido.");
            break;
    }
});

function addProcessadorFields() {
    extraFields.innerHTML = `
    <h1>Processador 1</h1>
    <div class="peca-container">
      <label for="processadores1">Número de processadores:</label>
      <input type="number" id="processadores1" name="processadores1" required>
    </div>
    <div class="peca-container">
      <label for="threads1">Threads:</label>
      <input type="number" id="threads1" name="threads1" required>
    </div>
    <div class="peca-container">
      <label for="ghz1">Velocidade (GHz):</label>
      <input type="number" id="ghz1" name="ghz1" required>
    </div>
    <div class="peca-container">
      <label for="potencia1">Potência (W):</label>
      <input type="number" id="potencia1" name="potencia1" required>
    </div>

    <h1>Processador 2</h1>
    <div class="peca-container">
      <label for="processadores2">Número de processadores:</label>
      <input type="number" id="processadores2" name="processadores2" required>
   </div>
   <div class="peca-container">
      <label for="threads2">Threads:</label>
      <input type="number" id="threads2" name="threads2" required>
   </div>
   <div class="peca-container">
      <label for="ghz2">Velocidade (GHz):</label>
      <input type="number" id="ghz2" name="ghz2" required>
   </div>
   <div class="peca-container">
      <label for="potencia2">Potência (W):</label>
      <input type="number" id="potencia2" name="potencia2" required>
   </div>
  `;
}


function addPlacaMaeFields() {
    extraFields.innerHTML = `
    <h1>Placa mãe 1</h1>
    <div class="peca-container">
      <label for="memoria1">Máximo de memória compatível:</label>
      <input type="number" id="memoria1" name="memoria1" required>
    </div>
    <div class="peca-container">
      <label for="velocidade1">Velocidade do relógio de memória:</label>
      <input type="number" id="velocidade1" name="velocidade1" required>
    </div>
    <div class="peca-container">
      <label for="portas1">Número de portas USB 2.0:</label>
      <input type="number" id="portas1" name="portas1" required>
    </div>
    <div class="peca-container">
      <label for="entradas1">Entradas para memória:</label>
      <input type="number" id="entradas1" name="entradas1" required>
    </div>

    <h1>Placa mãe 2</h1>
    <div class="peca-container">
      <label for="memoria2">Máximo de memória compatível:</label>
      <input type="number" id="memoria2" name="memoria2" required>
    </div>
    <div class="peca-container">
      <label for="velocidade2">Velocidade do relógio de memória:</label>
      <input type="number" id="velocidade2" name="velocidade2" required>
    </div>
    <div class="peca-container">
      <label for="portas2">Número de portas USB 2.0:</label>
      <input type="number" id="portas2" name="portas2" required>
    </div>
    <div class="peca-container">
      <label for="entradas2">Entradas para memória:</label>
      <input type="number" id="entradas2" name="entradas2" required>
    </div>
  `;
}

function addMemoriaRamFields() {
    extraFields.innerHTML = `
    <h1>Memória RAM 1</h1>
    <div class="peca-container">
      <label for="ram1">RAM:</label>
      <input type="number" id="ram1" name="ram1" required>
    </div>
    <div class="peca-container">
      <label for="voltagem1">Voltagem:</label>
      <input type="number" id="voltagem1" name="voltagem1" required>
    </div>
    <div class="peca-container">
      <label for="velocidade1">Velocidade de transmissão de dados:</label>
      <input type="number" id="velocidade1" name="velocidade1" required>
    </div>

    <h1>Memória RAM 2</h1>
    <div class="peca-container">
      <label for="ram2">RAM:</label>
      <input type="number" id="ram2" name="ram2" required>
    </div>
    <div class="peca-container">
      <label for="voltagem2">Voltagem:</label>
      <input type="number" id="voltagem2" name="voltagem2" required>
    </div>
    <div class="peca-container">
      <label for="velocidade2">Velocidade de transmissão de dados:</label>
      <input type="number" id="velocidade2" name="velocidade2" required>
    </div>
  `;
}


function addPlacaDeVideoFields() {
    extraFields.innerHTML = `
    <h1>Placa de Vídeo 1</h1>
    <div class="peca-container">
      <label for="velocidade1">Velocidade do relógio de memória:</label>
      <input type="number" id="velocidade1" name="velocidade1" required>
    </div>
    <div class="peca-container">
      <label for="memoria1">Memória de vídeo:</label>
      <input type="number" id="memoria1" name="memoria1" required>
    </div>

    <h1>Placa de Vídeo 2</h1>
    <div class="peca-container">
      <label for="velocidade2">Velocidade do relógio de memória:</label>
      <input type="number" id="velocidade2" name="velocidade2" required>
    </div>
    <div class="peca-container">
      <label for="memoria2">Memória de vídeo:</label>
      <input type="number" id="memoria2" name="memoria2" required>
    </div>
    `;
}

function addDiscoRigidoFields() {
    extraFields.innerHTML = `
    <h1>HD 1</h1>
    <div class="peca-container">
      <label for="memoria1">Tamanho da memória externa:</label>
      <input type="number" id="memoria1" name="memoria1" required>
    </div>
    <div class="peca-container">
      <label for="tamanho1">Tamanho do HD:</label>
      <input type="number" id="tamanho1" name="tamanho1" required>
    </div>
    <div class="peca-container">
      <label for="capacidade1">Capacidade:</label>
      <input type="number" id="capacidade1" name="capacidade1" required>
    </div>

    <h1>HD 2</h1>
    <div class="peca-container">
      <label for="memoria2">Tamanho da memória externa:</label>
      <input type="number" id="memoria2" name="memoria2" required>
    </div>
    <div class="peca-container">
      <label for="tamanho2">Tamanho do HD:</label>
      <input type="number" id="tamanho2" name="tamanho2" required>
    </div>
    <div class="peca-container">
      <label for="capacidade2">Capacidade:</label>
      <input type="number" id="capacidade2" name="capacidade2" required>
    </div>
    `;
}
function addSsdFields() {
    extraFields.innerHTML = `
    <h1>SSD 1</h1>
    <div class="peca-container">
      <label for="memoria1">Tamanho da memória externa:</label>
      <input type="number" id="memoria1" name="memoria1" required>
    </div>
    <div class="peca-container">
      <label for="tamanho1">Tamanho do HD:</label>
      <input type="number" id="tamanho1" name="tamanho1" required>
    </div>
    <div class="peca-container">
      <label for="capacidade1">Capacidade:</label>
      <input type="number" id="capacidade1" name="capacidade1" required>
    </div>

    <h1>SSD 2</h1>
    <div class="peca-container">
      <label for="memoria2">Tamanho da memória externa:</label>
      <input type="number" id="memoria2" name="memoria2" required>
    </div>
    <div class="peca-container">
      <label for="tamanho2">Tamanho do HD:</label>
      <input type="number" id="tamanho2" name="tamanho2" required>
    </div>
    <div class="peca-container">
      <label for="capacidade2">Capacidade:</label>
      <input type="number" id="capacidade2" name="capacidade2" required>
    </div>
    `;
}

function addCoolerCpuFields() {
    extraFields.innerHTML = `
    <h1>Cooler 1</h1>
    <div class="peca-container">
      <label for="voltagem1">Voltagem:</label>
      <input type="number" id="voltagem1" name="voltagem1" required>
    </div>
    <div class="peca-container">
      <label for="potencia1">Potência em watts:</label>
      <input type="number" id="potencia1" name="potencia1" required>
    </div>

    <h1>Cooler 2</h1>
    <div class="peca-container">
      <label for="voltagem2">Voltagem:</label>
      <input type="number" id="voltagem2" name="voltagem2" required>
    </div>
    <div class="peca-container">
      <label for="potencia2">Potência em watts:</label>
      <input type="number" id="potencia2" name="potencia2" required>
    </div>
    `;
}

function compararProcessador() {
    const processadores1 = parseFloat(document.getElementById("processadores1").value);
    const processadores2 = parseFloat(document.getElementById("processadores2").value);

    const threads1 = parseFloat(document.getElementById("threads1").value);
    const threads2 = parseFloat(document.getElementById("threads2").value);

    const ghz1 = parseFloat(document.getElementById("ghz1").value);
    const ghz2 = parseFloat(document.getElementById("ghz2").value);

    const potencia1 = parseFloat(document.getElementById("potencia1").value);
    const potencia2 = parseFloat(document.getElementById("potencia2").value);

    let vencedorProcessador = "Empate";
    if (processadores1 > processadores2) {
        vencedorProcessador = "Processador 1";
    } else if (processadores2 > processadores1) {
        vencedorProcessador = "Processador 2";
    }

    let vencedorThreads = "Empate";
    if (threads1 > threads2) {
        vencedorThreads = "Processador 1";
    } else if (threads2 > threads1) {
        vencedorThreads = "Processador 2";
    }

    let vencedorGHz = "Empate";
    if (ghz1 > ghz2) {
        vencedorGHz = "Processador 1";
    } else if (ghz2 > ghz1) {
        vencedorGHz = "Processador 2";
    }

    let vencedorPotencia = "Empate";
    if (potencia1 > potencia2) {
        vencedorPotencia = "Processador 1";
    } else if (potencia2 > potencia1) {
        vencedorPotencia = "Processador 2";
    }

    exibirResultadoFinal(vencedorProcessador, vencedorThreads, vencedorGHz, vencedorPotencia);
}

function exibirResultadoFinal(vencedorProcessador, vencedorThreads, vencedorGHz, vencedorPotencia) {
    let totalGanhosProcessador1 = 0;
    let totalGanhosProcessador2 = 0;

    if (vencedorProcessador === "Processador 1") {
        totalGanhosProcessador1++;
    } else if (vencedorProcessador === "Processador 2") {
        totalGanhosProcessador2++;
    }

    if (vencedorThreads === "Processador 1") {
        totalGanhosProcessador1++;
    } else if (vencedorThreads === "Processador 2") {
        totalGanhosProcessador2++;
    }

    if (vencedorGHz === "Processador 1") {
        totalGanhosProcessador1++;
    } else if (vencedorGHz === "Processador 2") {
        totalGanhosProcessador2++;
    }

    if (vencedorPotencia === "Processador 1") {
        totalGanhosProcessador1++;
    } else if (vencedorPotencia === "Processador 2") {
        totalGanhosProcessador2++;
    }

    let vencedorFinal = "";
    if (totalGanhosProcessador1 > totalGanhosProcessador2) {
        vencedorFinal = "Processador 1 ganhou em mais aspectos.";
    } else if (totalGanhosProcessador1 < totalGanhosProcessador2) {
        vencedorFinal = "Processador 2 ganhou em mais aspectos.";
    } else {
        vencedorFinal = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre Processadores:</h2>
        <h3>Número de processadores:</h3>
        <p>Vencedor: ${vencedorProcessador}</p>
        <h3>Threads:</h3>
        <p>Vencedor: ${vencedorThreads}</p>
        <h3>Velocidade (GHz):</h3>
        <p>Vencedor: ${vencedorGHz}</p>
        <h3>Potência (W):</h3>
        <p>Vencedor: ${vencedorPotencia}</p>
        <h4>Vencedor Final: ${vencedorFinal}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}


function compararPlacaMae() {
    const memoria1 = parseFloat(document.getElementById("memoria1").value);
    const memoria2 = parseFloat(document.getElementById("memoria2").value);

    const velocidade1 = parseFloat(document.getElementById("velocidade1").value);
    const velocidade2 = parseFloat(document.getElementById("velocidade2").value);

    const portas1 = parseFloat(document.getElementById("portas1").value);
    const portas2 = parseFloat(document.getElementById("portas2").value);

    const entradas1 = parseFloat(document.getElementById("entradas1").value);
    const entradas2 = parseFloat(document.getElementById("entradas2").value);

    let vencedorMemoria = "Empate";
    if (memoria1 > memoria2) {
        vencedorMemoria = "Placa Mãe 1";
    } else if (memoria2 > memoria1) {
        vencedorMemoria = "Placa Mãe 2";
    }

    let vencedorVelocidade = "Empate";
    if (velocidade1 > velocidade2) {
        vencedorVelocidade = "Placa Mãe 1";
    } else if (velocidade2 > velocidade1) {
        vencedorVelocidade = "Placa Mãe 2";
    }

    let vencedorPortas = "Empate";
    if (portas1 > portas2) {
        vencedorPortas = "Placa Mãe 1";
    } else if (portas2 > portas1) {
        vencedorPortas = "Placa Mãe 2";
    }

    let vencedorEntradas = "Empate";
    if (entradas1 > entradas2) {
        vencedorEntradas = "Placa Mãe 1";
    } else if (entradas2 > entradas1) {
        vencedorEntradas = "Placa Mãe 2";
    }
    exibirResultadoPlacaMae(vencedorMemoria, vencedorVelocidade, vencedorPortas, vencedorEntradas);
}

function exibirResultadoPlacaMae(vencedorMemoria, vencedorVelocidade, vencedorPortas, vencedorEntradas) {
    let totalGanhosPlacaMae1 = 0;
    let totalGanhosPlacaMae2 = 0;

    if (vencedorMemoria === "Placa Mãe 1") {
        totalGanhosPlacaMae1++;
    } else if (vencedorMemoria === "Placa Mãe 2") {
        totalGanhosPlacaMae2++;
    }

    if (vencedorVelocidade === "Placa Mãe 1") {
        totalGanhosPlacaMae1++;
    } else if (vencedorVelocidade === "Placa Mãe 2") {
        totalGanhosPlacaMae2++;
    }

    if (vencedorPortas === "Placa Mãe 1") {
        totalGanhosPlacaMae1++;
    } else if (vencedorPortas === "Placa Mãe 2") {
        totalGanhosPlacaMae2++;
    }

    if (vencedorEntradas === "Placa Mãe 1") {
        totalGanhosPlacaMae1++;
    } else if (vencedorEntradas === "Placa Mãe 2") {
        totalGanhosPlacaMae2++;
    }

    let vencedorFinalPlacaMae = "";
    if (totalGanhosPlacaMae1 > totalGanhosPlacaMae2) {
        vencedorFinalPlacaMae = "Placa Mãe 1 ganhou em mais aspectos.";
    } else if (totalGanhosPlacaMae1 < totalGanhosPlacaMae2) {
        vencedorFinalPlacaMae = "Placa Mãe 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalPlacaMae = "A comparação resultou em um empate.";
    }

    const resultados = `
            <h2>Comparação entre Placas Mãe:</h2>
            <p>Máximo de memória compatível:</p>
            <p>Vencedor: ${vencedorMemoria}</p>
            <p>Velocidade do relógio de memória:</p>
            <p>Vencedor: ${vencedorVelocidade}</p>
            <p>Número de portas USB 2.0:</p>
            <p>Vencedor: ${vencedorPortas}</p>
            <p>Entradas para memória:</p>
            <p>Vencedor: ${vencedorEntradas}</p>
            <h4>Vencedor Final: ${vencedorFinalPlacaMae}</h4>
        `;

    document.getElementById("resultados").innerHTML = resultados;
}


function compararMemoriaRam() {
    const ram1 = parseFloat(document.getElementById("ram1").value);
    const ram2 = parseFloat(document.getElementById("ram2").value);

    const voltagem1 = parseFloat(document.getElementById("voltagem1").value);
    const voltagem2 = parseFloat(document.getElementById("voltagem2").value);

    const velocidade1 = parseFloat(document.getElementById("velocidade1").value);
    const velocidade2 = parseFloat(document.getElementById("velocidade2").value);

    let vencedorRam = "Empate";

    if (ram1 > ram2) {
        vencedorRam = "Memória RAM 1";
    } else if (ram2 > ram1) {
        vencedorRam = "Memória RAM 2";
    }

    let vencedorVoltagem = "Empate";

    if (voltagem1 > voltagem2) {
        vencedorVoltagem = "Memória RAM 1";
    } else if (voltagem2 > voltagem1) {
        vencedorVoltagem = "Memória RAM 2";
    }

    let vencedorVelocidade = "Empate";

    if (velocidade1 > velocidade2) {
        vencedorVelocidade = "Memória RAM 1";
    } else if (velocidade2 > velocidade1) {
        vencedorVelocidade = "Memória RAM 2";
    }

    exibirResultadoMemoriaRam(vencedorRam, vencedorVoltagem, vencedorVelocidade);
}

function exibirResultadoMemoriaRam(vencedorMemoria, vencedorVoltagem, vencedorVelocidade) {
    let totalGanhosMemoriaRam1 = 0;
    let totalGanhosMemoriaRam2 = 0;

    if (vencedorMemoria === "Memória RAM 1") {
        totalGanhosMemoriaRam1++;
    } else if (vencedorMemoria === "Memória RAM 2") {
        totalGanhosMemoriaRam2++;
    }

    if (vencedorVoltagem === "Memória RAM 1") {
        totalGanhosMemoriaRam1++;
    } else if (vencedorVoltagem === "Memória RAM 2") {
        totalGanhosMemoriaRam2++;
    }

    if (vencedorVelocidade === "Memória RAM 1") {
        totalGanhosMemoriaRam1++;
    } else if (vencedorVelocidade === "Memória RAM 2") {
        totalGanhosMemoriaRam2++;
    }

    let vencedorFinalMemoriaRam = "";
    if (totalGanhosMemoriaRam1 > totalGanhosMemoriaRam2) {
        vencedorFinalMemoriaRam = "Memória RAM 1 ganhou em mais aspectos.";
    } else if (totalGanhosMemoriaRam1 < totalGanhosMemoriaRam2) {
        vencedorFinalMemoriaRam = "Memória RAM 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalMemoriaRam = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre Memórias RAM:</h2>
        <p>RAM:</p>
        <p>Vencedor: ${vencedorMemoria}</p>
        <p>Voltagem:</p>
        <p>Vencedor: ${vencedorVoltagem}</p>
        <p>Velocidade de transmissão de dados:</p>
        <p>Vencedor: ${vencedorVelocidade}</p>
        <h4>Vencedor Final: ${vencedorFinalMemoriaRam}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}

function compararPlacaDeVideo() {
    const velocidade1 = parseFloat(document.getElementById("velocidade1").value);
    const velocidade2 = parseFloat(document.getElementById("velocidade2").value);

    const memoria1 = parseFloat(document.getElementById("memoria1").value);
    const memoria2 = parseFloat(document.getElementById("memoria2").value);

    let vencedorVelocidade = "Empate";

    if (velocidade1 > velocidade2) {
        vencedorVelocidade = "Placa de Vídeo 1";
    } else if (velocidade2 > velocidade1) {
        vencedorVelocidade = "Placa de Vídeo 2";
    }

    let vencedorMemoria = "Empate";

    if (memoria1 > memoria2) {
        vencedorMemoria = "Placa de Vídeo 1";
    } else if (memoria2 > memoria1) {
        vencedorMemoria = "Placa de Vídeo 2";
    }

    exibirResultadoPlacaDeVideo(vencedorVelocidade, vencedorMemoria);
}

function exibirResultadoPlacaDeVideo(vencedorVelocidade, vencedorMemoria) {
    let totalGanhosPlacaDeVideo1 = 0;
    let totalGanhosPlacaDeVideo2 = 0;

    if (vencedorVelocidade === "Placa de Vídeo 1") {
        totalGanhosPlacaDeVideo1++;
    } else if (vencedorVelocidade === "Placa de Vídeo 2") {
        totalGanhosPlacaDeVideo2++;
    }

    if (vencedorMemoria === "Placa de Vídeo 1") {
        totalGanhosPlacaDeVideo1++;
    } else if (vencedorMemoria === "Placa de Vídeo 2") {
        totalGanhosPlacaDeVideo2++;
    }

    let vencedorFinalPlacaDeVideo = "";
    if (totalGanhosPlacaDeVideo1 > totalGanhosPlacaDeVideo2) {
        vencedorFinalPlacaDeVideo = "Placa de Vídeo 1 ganhou em mais aspectos.";
    } else if (totalGanhosPlacaDeVideo1 < totalGanhosPlacaDeVideo2) {
        vencedorFinalPlacaDeVideo = "Placa de Vídeo 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalPlacaDeVideo = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre Placas de Vídeo:</h2>
        <p>Velocidade:</p>
        <p>Vencedor: ${vencedorVelocidade}</p>
        <p>Memória (GB):</p>
        <p>Vencedor: ${vencedorMemoria}</p>
        <h4>Vencedor Final: ${vencedorFinalPlacaDeVideo}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}


function compararDiscoRigido() {
    const capacidade1 = parseFloat(document.getElementById("capacidade1").value);
    const capacidade2 = parseFloat(document.getElementById("capacidade2").value);

    const tamanho1 = parseFloat(document.getElementById("tamanho1").value);
    const tamanho2 = parseFloat(document.getElementById("tamanho2").value);

    const memoria1 = parseFloat(document.getElementById("memoria1").value);
    const memoria2 = parseFloat(document.getElementById("memoria2").value);

    let vencedorCapacidade = "Empate";

    if (capacidade1 > capacidade2) {
        vencedorCapacidade = "Disco Rígido 1";
    } else if (capacidade2 > capacidade1) {
        vencedorCapacidade = "Disco Rígido 2";
    }

    let vencedorTamanho = "Empate";

    if (tamanho1 > tamanho2) {
        vencedorTamanho = "Disco Rígido 1";
    } else if (tamanho2 > tamanho1) {
        vencedorTamanho = "Disco Rígido 2";
    }

    let vencedorMemoria = "Empate";

    if (memoria1 > memoria2) {
        vencedorMemoria = "Disco Rígido 1";
    } else if (memoria2 > memoria1) {
        vencedorMemoria = "Disco Rígido 2";
    }

    exibirResultadoDiscoRigido(vencedorCapacidade, vencedorTamanho, vencedorMemoria);
}

function exibirResultadoDiscoRigido(vencedorCapacidade, vencedorTamanho, vencedorMemoria) {
    let totalGanhosDiscoRigido1 = 0;
    let totalGanhosDiscoRigido2 = 0;

    if (vencedorCapacidade === "Disco Rígido 1") {
        totalGanhosDiscoRigido1++;
    } else if (vencedorCapacidade === "Disco Rígido 2") {
        totalGanhosDiscoRigido2++;
    }

    if (vencedorTamanho === "Disco Rígido 1") {
        totalGanhosDiscoRigido1++;
    } else if (vencedorTamanho === "Disco Rígido 2") {
        totalGanhosDiscoRigido2++;
    }

    if (vencedorMemoria === "Disco Rígido 1") {
        totalGanhosDiscoRigido1++;
    } else if (vencedorMemoria === "Disco Rígido 2") {
        totalGanhosDiscoRigido2++;
    }

    let vencedorFinalDiscoRigido = "";
    if (totalGanhosDiscoRigido1 > totalGanhosDiscoRigido2) {
        vencedorFinalDiscoRigido = "Disco Rígido 1 ganhou em mais aspectos.";
    } else if (totalGanhosDiscoRigido1 < totalGanhosDiscoRigido2) {
        vencedorFinalDiscoRigido = "Disco Rígido 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalDiscoRigido = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre Discos Rígidos (HDD):</h2>
        <p>Capacidade (GB):</p>
        <p>Vencedor: ${vencedorCapacidade}</p>
        <p>Tamanho do HD:</p>
        <p>Vencedor: ${vencedorTamanho}</p>
        <p>Memória externa:</p>
        <p>Vencedor: ${vencedorMemoria}</p>
        <h4>Vencedor Final: ${vencedorFinalDiscoRigido}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}


function compararSsd() {
    const capacidade1 = parseFloat(document.getElementById("capacidade1").value);
    const capacidade2 = parseFloat(document.getElementById("capacidade2").value);

    const tamanho1 = parseFloat(document.getElementById("tamanho1").value);
    const tamanho2 = parseFloat(document.getElementById("tamanho2").value);

    const memoria1 = parseFloat(document.getElementById("memoria1").value);
    const memoria2 = parseFloat(document.getElementById("memoria2").value);

    let vencedorCapacidade = "Empate";

    if (capacidade1 > capacidade2) {
        vencedorCapacidade = "SSD 1";
    } else if (capacidade2 > capacidade1) {
        vencedorCapacidade = "SSD 2";
    }

    let vencedorTamanho = "Empate";

    if (tamanho1 > tamanho2) {
        vencedorTamanho = "SSD 1";
    } else if (tamanho2 > tamanho1) {
        vencedorTamanho = "SSD 2";
    }

    let vencedorMemoria = "Empate";

    if (memoria1 > memoria2) {
        vencedorMemoria = "SSD 1";
    } else if (memoria2 > memoria1) {
        vencedorMemoria = "SSD 2";
    }

    exibirResultadoSsd(vencedorCapacidade, vencedorTamanho, vencedorMemoria);
}

function exibirResultadoSsd(vencedorCapacidade, vencedorTamanho, vencedorMemoria) {
    let totalGanhosSsd1 = 0;
    let totalGanhosSsd2 = 0;

    if (vencedorCapacidade === "SSD 1") {
        totalGanhosSsd1++;
    } else if (vencedorCapacidade === "SSD 2") {
        totalGanhosSsd2++;
    }

    if (vencedorTamanho === "SSD 1") {
        totalGanhosSsd1++;
    } else if (vencedorTamanho === "SSD 2") {
        totalGanhosSsd2++;
    }

    if (vencedorMemoria === "SSD 1") {
        totalGanhosSsd1++;
    } else if (vencedorMemoria === "SSD 2") {
        totalGanhosSsd2++;
    }

    let vencedorFinalSsd = "";
    if (totalGanhosSsd1 > totalGanhosSsd2) {
        vencedorFinalSsd = "SSD 1 ganhou em mais aspectos.";
    } else if (totalGanhosSsd1 < totalGanhosSsd2) {
        vencedorFinalSsd = "SSD 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalSsd = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre SSDs:</h2>
        <p>Capacidade (GB):</p>
        <p>Vencedor: ${vencedorCapacidade}</p>
        <p>Tamanho do HD:</p>
        <p>Vencedor: ${vencedorTamanho}</p>
        <p>Memória externa:</p>
        <p>Vencedor: ${vencedorMemoria}</p>
        <h4>Vencedor Final: ${vencedorFinalSsd}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}

function compararCoolerDeCpu() {
    const voltagem1 = parseFloat(document.getElementById("voltagem1").value);
    const voltagem2 = parseFloat(document.getElementById("voltagem2").value);

    const potencia1 = parseFloat(document.getElementById("potencia1").value);
    const potencia2 = parseFloat(document.getElementById("potencia2").value);

    let vencedorVoltagem = "Empate";

    if (voltagem1 > voltagem2) {
        vencedorVoltagem = "Cooler de CPU 1";
    } else if (voltagem2 > voltagem1) {
        vencedorVoltagem = "Cooler de CPU 2";
    }

    let vencedorPotencia = "Empate";

    if (potencia1 > potencia2) {
        vencedorPotencia = "Cooler de CPU 1";
    } else if (potencia2 > potencia1) {
        vencedorPotencia = "Cooler de CPU 2";
    }

    exibirResultadoCoolerDeCpu(vencedorVoltagem, vencedorPotencia);
}

function exibirResultadoCoolerDeCpu(vencedorVoltagem, vencedorPotencia) {
    let totalGanhosCooler1 = 0;
    let totalGanhosCooler2 = 0;

    if (vencedorVoltagem === "Cooler de CPU 1") {
        totalGanhosCooler1++;
    } else if (vencedorVoltagem === "Cooler de CPU 2") {
        totalGanhosCooler2++;
    }

    if (vencedorPotencia === "Cooler de CPU 1") {
        totalGanhosCooler1++;
    } else if (vencedorPotencia === "Cooler de CPU 2") {
        totalGanhosCooler2++;
    }

    let vencedorFinalCooler = "";
    if (totalGanhosCooler1 > totalGanhosCooler2) {
        vencedorFinalCooler = "Cooler de CPU 1 ganhou em mais aspectos.";
    } else if (totalGanhosCooler1 < totalGanhosCooler2) {
        vencedorFinalCooler = "Cooler de CPU 2 ganhou em mais aspectos.";
    } else {
        vencedorFinalCooler = "A comparação resultou em um empate.";
    }

    const resultados = `
        <h2>Comparação entre Coolers de CPU:</h2>
        <p>Voltagem (V):</p>
        <p>Vencedor: ${vencedorVoltagem}</p>
        <p>Potência em watts:</p>
        <p>Vencedor: ${vencedorPotencia}</p>
        <h4>Vencedor Final: ${vencedorFinalCooler}</h4>
    `;

    document.getElementById("resultados").innerHTML = resultados;
}