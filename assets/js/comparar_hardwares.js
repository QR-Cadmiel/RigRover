$(document).ready(function () {
    $('#pecaForm').submit(function (e) {
        e.preventDefault();

        var tipoPeca = $('#tipoPeca').val();
        var peca1 = $('#peca1').val();
        var peca2 = $('#peca2').val();
        var customSearchEngineID = '177337022afc04e73';
        var customSearchAPIKey = 'AIzaSyAmP1zAamWFKAv6TmmqgJqbBm7APxskgYE';

        var apiUrl = 'https://www.googleapis.com/customsearch/v1?key=' + customSearchAPIKey + '&cx=' + customSearchEngineID + '&q=';

        var urlPeca1 = apiUrl + encodeURIComponent(tipoPeca + ' ' + peca1);
        var urlPeca2 = apiUrl + encodeURIComponent(tipoPeca + ' ' + peca2);

        function getPeca1Data() {
            return new Promise(function (resolve, reject) {
                $.getJSON(urlPeca1, function (data1) {
                    var informacoesPeca1 = extrairInformacoes(data1);
                    resolve(informacoesPeca1);
                }).fail(function () {
                    reject("Erro ao obter dados da peça 1.");
                });
            });
        }

        function getPeca2Data() {
            return new Promise(function (resolve, reject) {
                $.getJSON(urlPeca2, function (data2) {
                    var informacoesPeca2 = extrairInformacoes(data2);
                    resolve(informacoesPeca2);
                }).fail(function () {
                    reject("Erro ao obter dados da peça 2.");
                });
            });
        }

        Promise.all([getPeca1Data(), getPeca2Data()]).then(function (result) {
            var informacoesPeca1 = result[0];
            var informacoesPeca2 = result[1];

            exibirInformacoesPeca(informacoesPeca1, '#resultados', 'peca1');
            exibirInformacoesPeca(informacoesPeca2, '#resultados', 'peca2');

            setTimeout(function () {
                var resultado = compararInformacoes(informacoesPeca1, informacoesPeca2);
                exibirResultados(resultado);
            }, 2000);
        }).catch(function (error) {
            console.error(error);
        });
    });
});

function extrairInformacoes(data) {
    console.log("Dados brutos da API:", data);

    if (data && data.items && data.items.length > 0) {
        var item = data.items[0];
        console.log("Item da API:", item);

        var informacoes = {
            nome: item.title,
            imagem: item.pagemap.cse_image ? item.pagemap.cse_image[0].src : "",
            descricao: item.snippet,
            nucleos: item.pagemap?.metatags?.nucleos, // Verifique se o caminho está correto
            velocidade: item.pagemap?.metatags?.velocidade, // Verifique se o caminho está correto
            preco: item.pagemap?.metatags?.preco // Verifique se o caminho está correto
        };

        console.log("Informações extraídas:", informacoes);

        return informacoes;
    } else {
        return null;
    }
}


function exibirInformacoesPeca(informacoes, divId, peca) {
    if (informacoes) {
        var html = '<div class="informacoes-peca">';
        html += '<h3>' + informacoes.nome + '</h3>';
        html += '<img src="' + informacoes.imagem + '" alt="' + informacoes.nome + '">';
        html += '<p><strong>Descrição:</strong> ' + informacoes.descricao + '</p>';
        html += '<h4>Informações:</h4>';
        html += '<p><strong>Número de núcleos:</strong> ' + informacoes.nucleos + '</p>';
        html += '<p><strong>Velocidade:</strong> ' + informacoes.velocidade + '</p>';
        html += '<p><strong>Preço:</strong> ' + informacoes.preco + '</p>';
        html += '</div>';

        $(divId).append(html);
    } else {
        $(divId).append('<p>Não foi possível encontrar informações para a ' + peca + '.</p>');
    }
}


function compararInformacoes(informacoesPeca1, informacoesPeca2) {
    if (informacoesPeca1 && informacoesPeca2) {
        var aspectosVencedores = 0;
        var melhorPeca = '';

        var comparacao = '';

        if (informacoesPeca1.nucleos > informacoesPeca2.nucleos) {
            aspectosVencedores++;
            comparacao += 'Número de núcleos de ' + informacoesPeca1.nome + ' é maior que ' + informacoesPeca2.nome + '. ';
        } else if (informacoesPeca1.nucleos < informacoesPeca2.nucleos) {
            aspectosVencedores++;
            comparacao += 'Número de núcleos de ' + informacoesPeca2.nome + ' é maior que ' + informacoesPeca1.nome + '. ';
        }

        if (informacoesPeca1.velocidade > informacoesPeca2.velocidade) {
            aspectosVencedores++;
            comparacao += 'Velocidade de ' + informacoesPeca1.nome + ' é maior que ' + informacoesPeca2.nome + '. ';
        } else if (informacoesPeca1.velocidade < informacoesPeca2.velocidade) {
            aspectosVencedores++;
            comparacao += 'Velocidade de ' + informacoesPeca2.nome + ' é maior que ' + informacoesPeca1.nome + '. ';
        }

        if (informacoesPeca1.preco < informacoesPeca2.preco) {
            aspectosVencedores++;
            comparacao += 'Preço de ' + informacoesPeca1.nome + ' é menor que ' + informacoesPeca2.nome + '. ';
        } else if (informacoesPeca1.preco > informacoesPeca2.preco) {
            aspectosVencedores++;
            comparacao += 'Preço de ' + informacoesPeca2.nome + ' é menor que ' + informacoesPeca1.nome + '. ';
        }

        if (aspectosVencedores > 0) {
            return comparacao + informacoesPeca1.nome + ' é melhor por ganhar em mais aspectos.';
        } else {
            return 'As duas peças têm o mesmo desempenho.';
        }
    } else {
        return 'Não foi possível comparar as informações dos hardwares.';
    }
}


function exibirResultados(resultado) {
    if (resultado) {
        var html = '<div class="resultado">';
        html += '<p>' + resultado + '</p>';
        html += '</div>';

        $('#resultados').append(html);
    } else {
        $('#resultados').append('<p>Não foi possível determinar qual é o melhor hardware para comprar.</p>');
    }
}