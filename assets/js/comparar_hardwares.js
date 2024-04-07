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
    let query = "";

    switch (tipo) {
        case "processador":
            query = `${modelo} CPU`;
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
            const titulo = data.items[0].title;

            return { descricao, link, titulo };
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
    comparacao += `<h3>${info1.titulo}</h3>`;
    comparacao += `<p>${info1.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info1.descricao)}</p>`; // Adicionando await
    comparacao += `<p>Clock: ${extraiClock(info1.descricao)}</p>`;
    comparacao += `<p>Núcleos: ${extraiNucleos(info1.descricao)}</p>`;
    comparacao += `<p>TDP: ${extraiTDP(info1.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `<div class="peca-info">`;
    comparacao += `<h3>${info2.titulo}</h3>`;
    comparacao += `<p>${info2.descricao}</p>`;
    comparacao += `<p>Preço: ${extraiPreco(info2.descricao)}</p>`; // Adicionando await
    comparacao += `<p>Clock: ${extraiClock(info2.descricao)}</p>`;
    comparacao += `<p>Núcleos: ${extraiNucleos(info2.descricao)}</p>`;
    comparacao += `<p>TDP: ${extraiTDP(info2.descricao)}</p>`;
    comparacao += `</div>`;

    comparacao += `</div>`;

    let melhor;
    if (tipo === "processador") {
        melhor = determinaMelhorProcessador(info1, info2);
    } else {
        melhor = determinaMelhor(info1, info2);
    }

    comparacao += `<p>Melhor: ${melhor}</p>`;

    return comparacao;
}

async function extraiPreco(descricao) {
    if (!descricao) return "Preço não encontrado";

    const regexPrice = /preço\s*:\s*R\$(\d+(\.\d+)?)/i;
    const match = descricao.match(regexPrice);
    return match ? `R$${match[1]}` : "Preço não encontrado";
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

function determinaMelhorProcessador(info1, info2) {
    if (!info1 || !info2) {
        return "Não é possível determinar o melhor processador.";
    }

    const nome1 = info1.titulo;
    const nome2 = info2.titulo;

    const preco1 = extraiPreco(info1.descricao);
    const preco2 = extraiPreco(info2.descricao);

    const clock1 = extraiClock(info1.descricao);
    const clock2 = extraiClock(info2.descricao);

    const nucleos1 = extraiNucleos(info1.descricao);
    const nucleos2 = extraiNucleos(info2.descricao);

    const tdp1 = extraiTDP(info1.descricao);
    const tdp2 = extraiTDP(info2.descricao);

    console.log (extraiPreco);
    
    console.log(`${nome1} vs ${nome2}`);
    console.log(`Preço: ${preco1} vs ${preco2}`);
    console.log(`Clock: ${clock1} vs ${clock2}`);
    console.log(`Núcleos: ${nucleos1} vs ${nucleos2}`);
    console.log(`TDP: ${tdp1} vs ${tdp2}`);
    console.log('\n');

    let melhor = "";

    if (preco1 !== null && preco2 !== null) {
        if (preco1 < preco2) {
            melhor = nome1;
        } else if (preco2 < preco1) {
            melhor = nome2;
        } else {
            // Prioritize higher clock speed with same core count
            if (clock1 > clock2 && nucleos1 === nucleos2) {
                melhor = nome1;
            } else if (clock2 > clock1 && nucleos2 === nucleos1) {
                melhor = nome2;
            } else if (nucleos1 > nucleos2) {
                melhor = nome1;
            } else if (nucleos2 > nucleos1) {
                melhor = nome2;
            } else {
                melhor = "Ambos têm o mesmo preço e especificações";
            }
        }
    }

    return `Melhor: ${melhor}`;
}

function mostraResultados(comparacao) {
    resultados.innerHTML = comparacao;
}
