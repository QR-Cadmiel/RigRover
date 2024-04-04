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

async function buscaGoogle(tipo, modelo) {
    let query = '';

    switch (tipo) {
        case 'processador':
            query = `${modelo} CPU`;
            break;
        case 'placa-mae':
            query = `${modelo} motherboard`;
            break;
        case 'memoria-ram':
            query = `${modelo} RAM`;
            break;
        case 'placa-de-video':
            query = `${modelo} RAM`;
            break;
        case 'disco-rigido':
            query = `${modelo} RAM`;
            break;
        case 'ssd':
            query = `${modelo} RAM`;
            break;
        case 'fonte-de-alimentacao':
            query = `${modelo} RAM`;
            break;
        case 'cooler-cpu':
            query = `${modelo} RAM`;
            break;
        default:
            query = `${modelo} ${tipo}`;
            break;
    }

    const url = `https://www.googleapis.com/customsearch/v1?key=${API_KEY}&cx=${CUSTOM_SEARCH_ID}&q=${query}`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (data.items && data.items.length > 0) {
            const descricao = data.items[0].snippet;
            const link = data.items[0].link;

            return { descricao, link };
        } else {
            return null;
        }
    } catch (error) {
        console.error("Erro ao buscar informações:", error);
        return null;
    }
}

function comparePecas(tipo, info1, info2) {
    let comparacao = "";

    comparacao += `<h2>Comparação entre ${tipo}s:</h2>`;
    comparacao += `<div class="comparacao-container">`;

    comparacao += `<div class="peca-info">`;
    comparacao += `<h3>${peca1.value}</h3>`;
    comparacao += `<p>${info1.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info1.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `<div class="peca-info">`;
    comparacao += `<h3>${peca2.value}</h3>`;
    comparacao += `<p>${info2.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info2.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `</div>`;

    const melhor = determinaMelhor(info1, info2);
    comparacao += `<p>Melhor: ${melhor}</p>`;

    return comparacao;
}

function determinaMelhor(info1, info2) {
    const preco1 = extraiPreco(info1.descricao);
    const preco2 = extraiPreco(info2.descricao);

    if (preco1 === "Preço não encontrado" && preco2 === "Preço não encontrado") {
        return "Não é possível determinar o melhor com base no preço.";
    } else if (preco1 === "Preço não encontrado") {
        return peca2.value;
    } else if (preco2 === "Preço não encontrado") {
        return peca1.value;
    } else {
        const preco1Float = parseFloat(preco1.replace("R$", "").replace(",", "."));
        const preco2Float = parseFloat(preco2.replace("R$", "").replace(",", "."));

        if (preco1Float < preco2Float) {
            return peca1.value;
        } else if (preco2Float < preco1Float) {
            return peca2.value;
        } else {
            return "Ambas são boas escolhas";
        }
    }
}

function mostraResultados(comparacao) {
    resultados.innerHTML = comparacao;
}

async function extraiPreco(descricao) {
    if (!descricao) return "Preço não encontrado";

    const regexPrice = /preço\s*:\s*R\$(\d+(\.\d+)?)/i;
    const match = descricao.match(regexPrice);
    return match ? `R$${match[1]}` : "Preço não encontrado";
}

function comparePecas(tipo, info1, info2) {
    let comparacao = "";

    comparacao += `<h2>Comparação entre ${tipo}s:</h2>`;
    comparacao += `<div class="comparacao-container">`;

    comparacao += `<div class="peca-info">`;
    comparacao += `<h3>${peca1.value}</h3>`;
    comparacao += `<p>${info1.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info1.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `<div class="peca-info">`;
    comparacao += `<h3>${peca2.value}</h3>`;
    comparacao += `<p>${info2.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info2.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `</div>`;

    let melhor;
    if (tipo === "processador") {
        melhor = determinaMelhorProcessador(info1, info2);
    } else if (tipo === "placa-mae") {
        melhor = determinaMelhorPlacaMae(info1, info2);
    } else if (tipo === "memoria-ram") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else if (tipo === "placa-de-video") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else if (tipo === "disco-rigido") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else if (tipo === "ssd") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else if (tipo === "fonte-de-alimentacao") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else if (tipo === "cooler-cpu") {
        melhor = determinaMelhorMemoriaRAM(info1, info2);
    } else {
        melhor = determinaMelhor(info1, info2);
    }

    comparacao += `<p>Melhor: ${melhor}</p>`;

    return comparacao;
}

function determinaMelhorProcessador(info1, info2) {
    if (!info1 || !info2) {
        return "Não é possível determinar o melhor processador.";
    }

    const nome1 = info1.nome;
    const nome2 = info2.nome;

    const preco1 = info1.preco;
    const preco2 = info2.preco;

    const clock1 = extraiClock(info1.descricao);
    const clock2 = extraiClock(info2.descricao);

    const nucleos1 = extraiNucleos(info1.descricao);
    const nucleos2 = extraiNucleos(info2.descricao);

    const tdp1 = extraiTDP(info1.descricao);
    const tdp2 = extraiTDP(info2.descricao);

    console.log(`${nome1}   ${nome2}`);
    console.log(`Clock:   ${clock1 !== null ? clock1 : 'Não encontrado'}   ${clock2 !== null ? clock2 : 'Não encontrado'}`);
    console.log(`Núcleos: ${nucleos1 !== null ? nucleos1 : 'Não encontrado'}   ${nucleos2 !== null ? nucleos2 : 'Não encontrado'}`);
    console.log(`TDP:     ${tdp1 !== null ? tdp1 : 'Não encontrado'}   ${tdp2 !== null ? tdp2 : 'Não encontrado'}`);
    console.log(`Preço:   ${preco1}   ${preco2}`);
    console.log('\n');

    let melhor = "";

    if (preco1 !== null && preco2 !== null) {
        if (preco1 < preco2) {
            melhor = nome1;
        } else if (preco2 < preco1) {
            melhor = nome2;
        } else {
            melhor = "Ambos têm o mesmo preço";
        }
    }

    return `Melhor: ${melhor}`;
}

function extraiClock(descricao) {
    const regexClock = /(\d+(\.\d+)?)\s*GHz/i;
    const match = descricao.match(regexClock);
    return match ? parseFloat(match[1]) : null;
}

function extraiNucleos(descricao) {
    const regexNucleos = /(\d+)\s*(?:núcleos?|core)/i;
    const match = descricao.match(regexNucleos);
    return match ? parseInt(match[1]) : null;
}

function extraiTDP(descricao) {
    const regexTDP = /TDP\s*:\s*(\d+)\s*W/i;
    const match = descricao.match(regexTDP);
    return match ? parseInt(match[1]) : null;
}


function determinaMelhorPlacaMae(info1, info2) {
    if (!info1 || !info2) {
        return "Não é possível determinar a melhor placa-mãe.";
    }

    const chipset1 = extraiChipset(info1.descricao);
    const chipset2 = extraiChipset(info2.descricao);

    const socket1 = extraiSocket(info1.descricao);
    const socket2 = extraiSocket(info2.descricao);

    let melhor = "";
    if (chipset1 && chipset2) {
        if (chipset1 === chipset2) {
            melhor = "Ambas têm o mesmo chipset";
        } else {
            melhor = chipset1.length > chipset2.length ? chipset1 : chipset2;
        }
    }

    if (socket1 && socket2) {
        if (socket1 === socket2) {
            melhor += " | Ambas têm o mesmo socket";
        } else {
            melhor += ` | ${socket1} vs ${socket2}`;
        }
    }

    return melhor;
}

function extraiChipset(descricao) {
    const regexChipset = /Chipset\s*:\s*(.+)/i;
    const match = descricao.match(regexChipset);
    return match ? match[1].trim() : null;
}

function extraiSocket(descricao) {
    const regexSocket = /Socket\s*:\s*(.+)/i;
    const match = descricao.match(regexSocket);
    return match ? match[1].trim() : null;
}

function determinaMelhorMemoriaRAM(info1, info2) {
    if (!info1 || !info2) {
        return "Não é possível determinar a melhor memória RAM.";
    }

    const capacidade1 = extraiCapacidadeRAM(info1.descricao);
    const capacidade2 = extraiCapacidadeRAM(info2.descricao);

    const frequencia1 = extraiFrequenciaRAM(info1.descricao);
    const frequencia2 = extraiFrequenciaRAM(info2.descricao);

    let melhor = "";
    if (capacidade1 && capacidade2) {
        if (capacidade1 === capacidade2) {
            melhor = "Ambas têm a mesma capacidade";
        } else {
            melhor = capacidade1 > capacidade2 ? capacidade1 : capacidade2;
        }
    }

    if (frequencia1 && frequencia2) {
        if (frequencia1 === frequencia2) {
            melhor += " | Ambas têm a mesma frequência";
        } else {
            melhor += ` | ${frequencia1} MHz vs ${frequencia2} MHz`;
        }
    }

    return melhor;
}

function extraiCapacidadeRAM(descricao) {
    const regexCapacidade = /Capacidade\s*:\s*(\d+)\s*GB/i;
    const match = descricao.match(regexCapacidade);
    return match ? match[1] + "GB" : null;
}

function extraiFrequenciaRAM(descricao) {
    const regexFrequencia = /Frequência\s*:\s*(\d+)\s*MHz/i;
    const match = descricao.match(regexFrequencia);
    return match ? match[1] + " MHz" : null;
}