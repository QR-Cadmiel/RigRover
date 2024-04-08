<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: home.php");
    exit;
}

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    $mostrarBotao = false;
} else {
    $mostrarBotao = true;
}

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    $sql = "INSERT INTO noticia (tipo, titulo, descricao, imagem) VALUES ('$tipo', '$titulo', '$descricao', '$imagem')";
    $resultado = $mysqli->query($sql);

    header("Location: noticias.php");
    exit();
}

$sql = "SELECT * FROM noticia";
$resultado = $mysqli->query($sql);
$noticia = array();

while ($noticias = $resultado->fetch_assoc()) {
    $noticia[] = $noticias;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - RigRover</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/noticias.css">
    <link rel="stylesheet" href="assets\css\responsividade\noticias-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/logout.js"></script>
</head>

<body>
    <div class="content">
        <div class="rigrover-1">
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="home.php" id="btn-nav">Página Inicial</a>
                    </li>
                    <li>
                        <a href="noticias.php" id="btn-nav">Noticias</a>
                    </li>
                    <li>
                        <a href="eventos.php" id="btn-nav">Eventos</a>
                    </li>
                    <li>
                        <a href="forum.php" id="btn-nav">Fórum</a>
                    </li>
                    <li>
                        <a href="comparar_hardwares.php" id="btn-nav">Hardware</a>
                    </li>
                    <li>
                        <a href="games.php" id="btn-nav">Wiki Jogos</a>
                    </li>
                    <a href="#" onclick="confirmLogout()">
                        <img src="assets/img/logout.png" alt="Botão de sair da conta" class="img-logout">
                    </a>
                </ul>
            </nav>

            <!-- --------Hamburguinho Menu----------  -->
            <div class="topnav">
                <div class="active">
                    <a href="#myLinks"></a>
                </div>

                <div id="myLinks">
                    <a href="home.php">Página Inicial</a>
                    <a href="noticias.php">Noticias</a>
                    <a href="eventos.php">Eventos</a>
                    <a href="forum.php">Fórum</a>
                    <a href="comparar_hardwares.php">Hardware</a>
                    <a href="games.php">Wiki Jogos</a>
                    <a href="logout.php">Deslogar da Conta</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- ----------------------------------------- -->

            <div class="main-content">
                <input type="text" name="name" placeholder="Pesquise a notícia que deseja" class="noticia-icon"
                    oninput="pesquisarNoticia()" required>

                <h3>Categorias</h3>

                <div class="categories">
                    <button class="btn-hardware" onclick="filtrarNoticias('hardwares')">Hardwares</button>
                    <button class="btn-hardware" onclick="filtrarNoticias('eventos')">Eventos</button>
                    <button class="btn-hardware" onclick="filtrarNoticias('games')">Games</button>
                    <button class="btn-hardware" onclick="filtrarNoticias('todos')">Todos</button>
                </div>

                <div class="noticias">
                    <h3>Criar Nova Notícia</h3>
                    <form method="post" action="">
                        <div class="tipo-criar">
                            <label for="tipo">Tipo:</label>
                            <select id="tipo" name="tipo">
                                <option value="games">Games</option>
                                <option value="eventos">Eventos</option>
                                <option value="hardwares">Hardwares</option>
                            </select>
                        </div>
                        <div class="criar-noticia">
                            <div class="titulo-criar">
                                <label for="titulo">Título:</label>
                                <textarea type="text" id="titulo" name="titulo" required></textarea>
                            </div>
                            <div class="descricao-criar">
                                <label for="descricao">Descrição:</label>
                                <textarea id="descricao" name="descricao" rows="4" required></textarea>
                            </div>
                            <div class="imagem-criar">
                                <label for="imagem">Link da Imagem:</label>
                                <textarea type="text" id="imagem" name="imagem" required></textarea>
                            </div>
                        </div>
                        <input class="btn-criar" type="submit" value="Criar Notícia">
                    </form>

                    <?php foreach ($noticia as $noticias): ?>
                        <div class="ntc-pergunta <?php echo strtolower($noticias['tipo']); ?>" onclick="abrirNoticia(this)"
                            style="color: white; cursor: pointer;">
                            <h2 class="titulo-pergunta">
                                <?php echo $noticias['titulo']; ?>
                            </h2>
                            <p>
                                <?php echo $noticias['descricao']; ?>
                            </p>
                            <div class="imagem-noticia">
                                <img src="<?php echo $noticias['imagem']; ?>" alt="Imagem da Notícia">
                            </div>
                            <div class="tipo-noticia" style="display: none;">
                                <?php echo strtolower($noticias['tipo']); ?>
                            </div>

                            <?php if ($mostrarBotao) { ?>
                                <button class="btn-crud" onclick="editarNoticia(<?php echo $noticias['id']; ?>)">Editar</button>
                                <button class="btn-crud2"
                                    onclick="excluirNoticia(<?php echo $noticias['id']; ?>)">Excluir</button>
                            <?php } ?>

                        </div>
                    <?php endforeach; ?>


                </div>

                <div class="noticia-popup" id="noticia-popup">
                    <div class="noticia-content">
                        <span class="fechar" onclick="fecharNoticia()">X</span>
                        <img src="" alt="Imagem da Notícia" id="noticia-imagem">
                        <h2 id="noticia-titulo"></h2>
                        <p id="noticia-texto"></p>
                        <button onclick="fecharNoticia()">Voltar</button>
                    </div>
                </div>

                <script>
                    function abrirNoticia(elemento) {
                        var titulo = document.querySelector("#noticia-popup .noticia-content #noticia-titulo");
                        var texto = document.querySelector("#noticia-popup .noticia-content #noticia-texto");
                        var imagem = document.querySelector("#noticia-popup .noticia-content #noticia-imagem");
                        var h2 = elemento.querySelector(".titulo-pergunta");
                        var p = elemento.querySelector("p");
                        var img = elemento.querySelector(".imagem-noticia img");

                        titulo.textContent = h2.textContent;
                        texto.textContent = p.textContent;
                        imagem.src = img.src;

                        document.getElementById("noticia-popup").style.display = "block";
                    }


                    function fecharNoticia() {
                        document.getElementById("noticia-popup").style.display = "none";
                    }

                    function filtrarNoticias(categoria) {
                        var todasNoticias = document.querySelectorAll('.ntc-pergunta');

                        todasNoticias.forEach(function (noticia) {
                            var tipoNoticia = noticia.querySelector('.tipo-noticia').textContent;
                            if (categoria === 'todos' || tipoNoticia === categoria) {
                                noticia.style.display = 'block';
                            } else {
                                noticia.style.display = 'none';
                            }
                        });
                    }

                    function pesquisarNoticia() {
                        var input = document.querySelector('.noticia-icon');
                        var filtro = input.value.toUpperCase();
                        var noticias = document.querySelectorAll('.noticias > .ntc-pergunta');

                        noticias.forEach(function (noticia) {
                            var titulo = noticia.querySelector('h2.titulo-pergunta');
                            if (titulo.innerText.toUpperCase().indexOf(filtro) > -1) {
                                noticia.style.display = 'block';
                            } else {
                                noticia.style.display = 'none';
                            }
                        });
                    }

                    function editarNoticia(id) {
                        window.location.href = "editar_noticia.php?id=" + id;
                    }

                    function excluirNoticia(id) {
                        if (confirm("Tem certeza de que deseja excluir esta notícia?")) {
                            window.location.href = "excluir_noticia.php?id=" + id;
                        }
                    }
                </script>

            </div>
        </div>
        <footer>
            <div class="cont-1">
                <img src="assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
                <ul>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="#quem-somos">Quem Somos?</a></li>
                    <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
                </ul>
            </div>
            <div class="cont-2">
                <div>
                    <div class="redes-footer">
                        <a href="https://www.instagram.com/rigrovergames/"><img src="assets/img/iconinstagram.png"
                                alt=""></a>
                        <a href="https://twitter.com/RigRoverGames"><img src="assets/img/iconx.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=61556959637519"><img
                                src="assets/img/iconfacebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img
                                src="assets/img/iconyoutube.png" alt=""></a>
                    </div>
                    <ul>
                        <li>
                            <a href="fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li>
                            <a href="politicas_de_privacidade.php">Politicas de Privacidade</a>
                        </li>
                        <li>
                            <a href="termo_e_condicoes.php">Termos e Condições</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </footer>
</body>

</html>