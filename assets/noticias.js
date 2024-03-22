function abrirNoticia(elemento) {
    var titulo = document.querySelector("#noticia-titulo");
    var texto = document.querySelector("#noticia-texto");
    var imagem = document.querySelector("#noticia-imagem");
    var h4 = elemento.querySelector("h4");
    var p = elemento.querySelector("p");
    var img = elemento.querySelector("img");

    titulo.textContent = h4.textContent;
    texto.textContent = p.textContent;
    imagem.src = img.src;

    document.getElementById("noticia-popup").style.display = "block";
}

function fecharNoticia() {
    document.getElementById("noticia-popup").style.display = "none";
}

function filtrarNoticias(categoria) {
    var todasNoticias = document.querySelectorAll('.noticias > div');
    todasNoticias.forEach(function (noticia) {
        noticia.style.display = 'none';
    });
    if (categoria === 'todos') {
        todasNoticias.forEach(function (noticia) {
            noticia.style.display = 'block';
        });
    } else {
        var noticiasCategoria = document.querySelectorAll('[id^=' + categoria + ']');
        noticiasCategoria.forEach(function (noticia) {
            noticia.style.display = 'block';
        });
    }
}

function pesquisarNoticia() {
    var input = document.querySelector('.noticia-icon');
    var filtro = input.value.toUpperCase();
    var noticias = document.querySelectorAll('.noticias > div');

    noticias.forEach(function (noticia) {
        var titulo = noticia.querySelector('h4');
        if (titulo.innerText.toUpperCase().indexOf(filtro) > -1) {
            noticia.style.display = '';
        } else {
            noticia.style.display = 'none';
        }
    });
}
