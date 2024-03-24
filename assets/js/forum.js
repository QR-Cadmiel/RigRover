function abrirPergunta(div) {
    const todasAsRespostas = document.querySelectorAll('.respostas');
    todasAsRespostas.forEach(resposta => {
        resposta.style.display = 'none';
    });

    const perguntaId = div.id;

    const respostasDaPergunta = document.getElementById('respostas' + perguntaId.slice(-1));
    respostasDaPergunta.style.display = 'block';
}