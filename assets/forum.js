function abrirPergunta(div) {
    // Oculta todas as seções de respostas
    const todasAsRespostas = document.querySelectorAll('.respostas');
    todasAsRespostas.forEach(resposta => {
        resposta.style.display = 'none';
    });

    // Obtém o ID da pergunta clicada
    const perguntaId = div.id;

    // Mostra a seção de respostas correspondente à pergunta clicada
    const respostasDaPergunta = document.getElementById('respostas' + perguntaId.slice(-1));
    respostasDaPergunta.style.display = 'block';
}