const API_KEY = "AIzaSyAmP1zAamWFKAv6TmmqgJqbBm7APxskgYE";
const CUSTOM_SEARCH_ID = "177337022afc04e73";

const form = document.getElementById("pecaForm");
const tipoPeca = document.getElementById("tipoPeca");
const peca1 = document.getElementById("peca1");
const peca2 = document.getElementById("peca2");
const resultados = document.getElementById("resultados");

form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const tipo = tipoPeca.value;

    const modelo1 = peca1.value;
    const modelo2 = peca2.value;

    if (!modelo1 || !modelo2) {
        alert("Preencha os campos com os modelos das peças.");
        return;
    }

    const [info1, info2] = await Promise.all([
        buscaGoogle(tipo, modelo1),
        buscaGoogle(tipo, modelo2),
    ]);

    if (!info1 || !info2) {
        resultados.innerHTML = `Não foi possível encontrar informações sobre todas as peças.`;
        return;
    }

    const comparacao = comparePecas(tipo, info1, info2);
    mostraResultados(comparacao);
});

function extraiPreco(descricao) {
    if (!descricao) return "Preço não encontrado";

    const regexPrice = /preço\s*:\s*R\$(\d+(\.\d+)?)/i;
    const match = descricao.match(regexPrice);
    return match ? `R$${match[1]}` : "Preço não encontrado";
}

async function buscaGoogle(tipo, modelo) {
    let query = '';

    switch (tipo) {
        case 'processador':
            query = `${modelo} CPU`;
            break;
        case 'placa-mãe':
            query = `${modelo} motherboard`;
            break;
        case 'memória RAM':
            query = `${modelo} RAM`;
            break;
        default:
            query = `${modelo} ${tipo}`;
            break;
    }

    const url = `https://www.googleapis.com/customsearch/v1?key=${API_KEY}&cx=${CUSTOM_SEARCH_ID}&q=${query}`;
    const response = await fetch(url);
    const data = await response.json();
    const items = data.items || [];

    if (items.length === 0) {
        return null;
    }

    const info = {
        titulo: items[0]?.title || "Não encontrado",
        descricao: items[0]?.snippet || "",
        imagem: items[0]?.pagemap?.cse_image?.[0]?.src || "",
        preco: extraiPreco(items[0]?.snippet) || "Não encontrado",
    };

    return info;
}

function comparePecas(tipo, info1, info2) {
    const comparacao = {
        peca1: info1,
        peca2: info2,
    };

    switch (tipo) {
        case "processador":
            comparacao.processador1 = extraiDadosProcessador(info1.descricao);
            comparacao.processador2 = extraiDadosProcessador(info2.descricao);
            break;
        case "placa-mãe":
            comparacao.placaMae1 = extraiDadosPlacaMae(info1.descricao);
            comparacao.placaMae2 = extraiDadosPlacaMae(info2.descricao);
            break;
        case "memória RAM":
            comparacao.memoria1 = extraiDadosRAM(info1.descricao);
            comparacao.memoria2 = extraiDadosRAM(info2.descricao);
            break;
        default:
            comparacao.mensagem = "Comparação detalhada não implementada para este tipo de peça.";
    }

    if (comparacao.processador1 && comparacao.processador2) {
        comparacao.diferencaClock = formataDiferenca(comparacao.processador1.clock, comparacao.processador2.clock, "GHz");
    } else {
        comparacao.diferencaClock = "N/A";
    }
    if (comparacao.processador1 && comparacao.processador2) {
        comparacao.diferencaNucleos = formataDiferenca(comparacao.processador1.nucleos, comparacao.processador2.nucleos);
    } else {
        comparacao.diferencaNucleos = "N/A";
    }
    if (comparacao.processador1 && comparacao.processador2) {
        comparacao.diferencaTDP = formataDiferenca(comparacao.processador1.tdp, comparacao.processador2.tdp, "W");
    } else {
        comparacao.diferencaTDP = "N/A";
    }

    function getMelhor(valor1, valor2) {
        if (valor1 > valor2) {
            return comparacao.peca1;
        } else if (valor1 < valor2) {
            return comparacao.peca2;
        } else {
            return "Igual";
        }
    }

    if (tipo === "placa-mãe") {
        comparacao.melhorChipset = getMelhor(comparacao.placaMae1.chipset, comparacao.placaMae2.chipset);
        comparacao.melhorSocket = comparacao.placaMae1.socket === comparacao.placaMae2.socket ? "Compatíveis" : "Diferentes";
        comparacao.maisSlotsRAM = getMelhor(comparacao.placaMae1.slotsRAM, comparacao.placaMae2.slotsRAM);
        comparacao.maisSlotsPCIE = getMelhor(comparacao.placaMae1.slotsPCIE, comparacao.placaMae2.slotsPCIE);

        comparacao.diferencaSlotsRAM = formataDiferenca(comparacao.placaMae1.slotsRAM, comparacao.placaMae2.slotsRAM);
        comparacao.diferencaSlotsPCIE = formataDiferenca(comparacao.placaMae1.slotsPCIE, comparacao.placaMae2.slotsPCIE);
    } else if (tipo === "memória RAM") {
        comparacao.maiorCapacidade = getMelhor(comparacao.memoria1.capacidade, comparacao.memoria2.capacidade);
        comparacao.melhorFrequencia = getMelhor(comparacao.memoria1.frequencia, comparacao.memoria2.frequencia);
        comparacao.melhorTipo = getMelhor(comparacao.memoria1.tipo, comparacao.memoria2.tipo);

        comparacao.diferencaCapacidade = formataDiferenca(comparacao.memoria1.capacidade, comparacao.memoria2.capacidade, "GB");
        comparacao.diferencaFrequencia = formataDiferenca(comparacao.memoria1.frequencia, comparacao.memoria2.frequencia, "MHz");
    }

    comparacao.vencedor = determinaVencedor(comparacao);

    return comparacao;
}

function determinaVencedor(comparacao) {
    if (comparacao.melhorClock && comparacao.melhorClock.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (melhor clock)`;
    } else if (comparacao.melhorNucleos && comparacao.melhorNucleos.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (mais núcleos)`;
    } else if (comparacao.melhorTDP && comparacao.melhorTDP.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (menor TDP)`;
    } else if (comparacao.melhorSocket === "Compatíveis") {
        return "Ambas as placas-mãe são compatíveis com o mesmo processador.";
    } else if (comparacao.maiorCapacidade && comparacao.maiorCapacidade.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (maior capacidade)`;
    } else if (comparacao.melhorFrequencia && comparacao.melhorFrequencia.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (maior frequência)`;
    } else if (comparacao.melhorChipset && comparacao.melhorChipset.titulo === comparacao.peca1.titulo) {
        return `${comparacao.peca1.titulo} (melhor chipset)`;
    } else {
        return `${comparacao.peca2.titulo} (melhor em alguns critérios)`;
    }
}

function formataDiferenca(valor1, valor2, unidade) {
    const diferenca = Math.abs(valor1 - valor2);
    const sinal = (valor1 > valor2) ? "" : "-";
    return `<span class="math-inline">\{sinal\}</span>{diferenca.toFixed(2)}${unidade}`;
}

function extraiDadosProcessador(descricao) {
    const regexClock = /GHz/i;
    const regexNucleos = /núcleos?|core/i;
    const regexTDP = /TDP/i;

    const clock = parseFloat(descricao.match(regexClock)?.[0]?.replace("GHz", ""));
    const nucleos = parseInt(descricao.match(regexNucleos)?.[0]?.replace(/\D/g, ""));
    const tdp = parseInt(descricao.match(regexTDP)?.[0]?.replace(/\D/g, ""));

    return {
        clock,
        nucleos,
        tdp,
    };
}

function extraiDadosPlacaMae(descricao) {
    const regexChipset = /chipset/i;
    const regexSocket = /socket/i;
    const regexSlotsRAM = /RAM|dimm/i;
    const regexSlotsPCIE = /PCIe/i;

    const chipset = descricao.match(regexChipset)?.[0]?.replace("chipset", "").trim();
    const socket = descricao.match(regexSocket)?.[0]?.replace("socket", "").trim();
    const slotsRAM = parseInt(descricao.match(regexSlotsRAM)?.[0]?.replace(/\D/g, ""));
    const slotsPCIE = parseInt(descricao.match(regexSlotsPCIE)?.[0]?.replace(/\D/g, ""));

    return {
        chipset,
        socket,
        slotsRAM,
        slotsPCIE,
    };
}

function extraiDadosRAM(descricao) {
    const regexCapacidade = /GB/i;
    const regexFrequencia = /MHz/i;
    const regexTipo = /DDR[0-9]/i;

    const capacidade = parseInt(descricao.match(regexCapacidade)?.[0]?.replace("GB", ""));
    const frequencia = parseInt(descricao.match(regexFrequencia)?.[0]?.replace("MHz", ""));
    const tipo = descricao.match(regexTipo)?.[0];

    return {
        capacidade,
        frequencia,
        tipo,
    };
}

function mostraResultados(comparacao) {
    let resultadosHTML = "";

    if (comparacao.mensagem) {
        resultadosHTML = `<p>${comparacao.mensagem}</p>`;
    } else {
        resultadosHTML = `
      <h2>${comparacao.peca1 ? comparacao.peca1.titulo : 'Peça 1'} vs ${comparacao.peca2 ? comparacao.peca2.titulo : 'Peça 2'}</h2>
      <div class="peca-container">
        <div class="peca">
          <img src="${comparacao.peca1 ? comparacao.peca1.imagem : ''}" alt="${comparacao.peca1 ? comparacao.peca1.titulo : 'Peça 1'}">
          <h3>${comparacao.peca1 ? comparacao.peca1.titulo : 'Peça 1'}</h3>
          <p>${comparacao.peca1 ? comparacao.peca1.preco : ''}</p>
        </div>
        <div class="peca">
          <img src="${comparacao.peca2 ? comparacao.peca2.imagem : ''}" alt="${comparacao.peca2 ? comparacao.peca2.titulo : 'Peça 2'}">
          <h3>${comparacao.peca2 ? comparacao.peca2.titulo : 'Peça 2'}</h3>
          <p>${comparacao.peca2 ? comparacao.peca2.preco : ''}</p>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>Característica</th>
            <th>${comparacao.peca1 ? comparacao.peca1.titulo : 'Peça 1'}</th>
            <th>${comparacao.peca2 ? comparacao.peca2.titulo : 'Peça 2'}</th>
            <th>Melhor</th>
            <th>Diferença</th>
          </tr>
        </thead>
        <tbody>
          ${comparacao.processador1 ? `
          <tr>
            <td>Clock</td>
            <td>${comparacao.processador1.clock} GHz</td>
            <td>${comparacao.processador2.clock} GHz</td>
            <td>${comparacao.melhorClock ? comparacao.melhorClock.titulo : '-'}</td>
            <td>${comparacao.diferencaClock}</td>
          </tr>
          <tr>
            <td>Núcleos</td>
            <td>${comparacao.processador1.nucleos}</td>
            <td>${comparacao.processador2.nucleos}</td>
            <td>${comparacao.melhorNucleos ? comparacao.melhorNucleos.titulo : '-'}</td>
            <td>${comparacao.diferencaNucleos}</td>
          </tr>
          <tr>
            <td>TDP</td>
            <td>${comparacao.processador1.tdp} W</td>
            <td>${comparacao.processador2.tdp} W</td>
            <td>${comparacao.melhorTDP ? comparacao.melhorTDP.titulo : '-'}</td>
            <td>${comparacao.diferencaTDP}</td>
          </tr>
          ` : ''}
          ${comparacao.placaMae1 ? `
          <tr>
            <td>Chipset</td>
            <td>${comparacao.placaMae1.chipset}</td>
            <td>${comparacao.placaMae2.chipset}</td>
            <td>${comparacao.melhorChipset ? comparacao.melhorChipset.titulo : '-'}</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Socket</td>
            <td>${comparacao.placaMae1.socket}</td>
            <td>${comparacao.placaMae2.socket}</td>
            <td>${comparacao.melhorSocket ? comparacao.melhorSocket : '-'}</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Slots de RAM</td>
            <td>${comparacao.placaMae1.slotsRAM}</td>
            <td>${comparacao.placaMae2.slotsRAM}</td>
            <td>${comparacao.maisSlotsRAM ? comparacao.maisSlotsRAM.titulo : '-'}</td>
            <td>${comparacao.diferencaSlotsRAM}</td>
          </tr>
          <tr>
            <td>Slots PCIe</td>
            <td>${comparacao.placaMae1.slotsPCIE}</td>
            <td>${comparacao.placaMae2.slotsPCIE}</td>
            <td>${comparacao.maisSlotsPCIE ? comparacao.maisSlotsPCIE.titulo : '-'}</td>
            <td>${comparacao.diferencaSlotsPCIE}</td>
          </tr>
          ` : ''}
          ${comparacao.memoria1 ? `
          <tr>
            <td>Capacidade</td>
            <td>${comparacao.memoria1.capacidade} GB</td>
            <td>${comparacao.memoria2.capacidade} GB</td>
            <td>${comparacao.maiorCapacidade ? comparacao.maiorCapacidade.titulo : '-'}</td>
            <td>${comparacao.diferencaCapacidade}</td>
          </tr>
          <tr>
            <td>Frequência</td>
            <td>${comparacao.memoria1.frequencia} MHz</td>
            <td>${comparacao.memoria2.frequencia} MHz</td>
            <td>${comparacao.melhorFrequencia ? comparacao.melhorFrequencia.titulo : '-'}</td>
            <td>${comparacao.diferencaFrequencia}</td>
          </tr>
          <tr>
            <td>Tipo</td>
            <td>${comparacao.memoria1.tipo}</td>
            <td>${comparacao.memoria2.tipo}</td>
            <td>${comparacao.melhorTipo ? comparacao.melhorTipo.titulo : '-'}</td>
            <td>-</td>
          </tr>
          ` : ''}
        </tbody>
      </table>
      `;

        if (comparacao.vencedor) {
            resultadosHTML += `<p>Vencedor: ${comparacao.vencedor}</p>`;
        }
    }

    resultados.innerHTML = resultadosHTML;
}