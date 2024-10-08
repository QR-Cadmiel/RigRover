<?php

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    $mostrarBotao = false;
} else {
    $mostrarBotao = true;
}

include 'validacao.php';
include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    $sql = "INSERT INTO noticia (tipo, titulo, descricao, imagem) VALUES ('$tipo', '$titulo', '$descricao', '$imagem')";
    $resultado = $mysqli->query($sql);

    header("Location: noticias");
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
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
    <script src="assets/js/hamburguinho.js"></script>
    <script src="assets/js/dropdownuser.js"></script>
    <script src="assets/js/logout.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="content">
        <div class="rigrover-1">
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="home" id="btn-nav">Página Inicial</a>
                    </li>
                    <li>
                        <a href="noticias" id="btn-nav">Notícias</a>
                    </li>
                    <li>
                        <a href="eventos" id="btn-nav">Eventos</a>
                    </li>
                    <li>
                        <a href="forum" id="btn-nav">Fórum</a>
                    </li>
                    <li>
                        <a href="hardware" id="btn-nav">Hardware</a>
                    </li>
                    <li>
                        <a href="games" id="btn-nav">Wiki Jogos</a>
                    </li>
                    <div class="dropdown">
                    <a href="#" onclick="toggleDropdown(event)"><img class="dropbtn" src="assets/img/imagemuserdrop.png" alt=""></a>
                    <div class="dropdown-content">
                        <a class="btn-dropdown" href="#" onclick="confirmLogout()">Sair</a>
                    </div>
                </div>
                </ul>
            </nav>

            <!-- --------Hamburguinho Menu----------  -->
            <div class="topnav">
                <div class="active">
                    <a href="#myLinks"></a>
                </div>

                <div id="myLinks">
                    <a href="home">Página Inicial</a>
                    <a href="noticias">Notícias</a>
                    <a href="eventos">Eventos</a>
                    <a href="forum">Fórum</a>
                    <a href="hardware">Hardware</a>
                    <a href="games.php">Wiki Jogos</a>
                    <a href="logout">Deslogar da Conta</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- ----------------------------------------- -->

            <div class="main-content">
                <?php if ($mostrarBotao) { ?>
                    <a href="noticiasadm"><button value="Administração das Notícias" class="btn-form-adm">Administração
                            das Notícias</button></a>
                <?php } ?>
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
                    <h3>Notícias</h3>

                    <?php foreach ($noticia as $noticias): ?>
                        <div class="ntc-pergunta categoria-<?php echo strtolower($noticias['tipo']); ?>"
                            onclick="abrirNoticia(this)" style="color: white; cursor: pointer;">
                            <h2 class="titulo-pergunta">
                                <?php echo $noticias['titulo']; ?>
                            </h2>
                            <p>
                                <?php echo $noticias['descricao']; ?>
                            </p>
                            <div class="imagem-noticia">
                                <img src="<?php echo $noticias['imagem']; ?>" alt="Imagem da Notícia">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


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
                        var categoriaNoticia = noticia.classList[1]; // Pegar a segunda classe que representa a categoria
                        if (categoria === 'todos' || categoriaNoticia === 'categoria-' + categoria) {
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
            </script>

        </div>
    </div>
    <footer>
        <div class="cont-1">
            <img src="assets\img\mascoterigrover.png" alt="Mascote Rigrover" class="img-footer-logo">
            <ul>
                <li><a href="index">Página Inicial</a></li>
                <li><a href="#quem-somos">Quem Somos?</a></li>
                <li><a href="#equipe-desenvolvedora">Equipe Desenvolvedora</a></li>
            </ul>
        </div>
        <div class="cont-2">
            <div>
            <div class="redes-footer">
                            <a id="instarigrover"><img src="assets/img/iconinstagram.png" alt=""></a>
                            <a id="twiterrigrover"><img src="assets/img/iconx.png" alt=""></a>
                            <a id="facerigrover"><img src="assets/img/iconfacebook.png" alt=""></a>
                            <a id="youtuberigrover"><img src="assets/img/iconyoutube.png" alt=""></a>
                        </div>
                        <script>
                            document.getElementById('instarigrover').addEventListener('click', function() {
                            window.open('https://www.instagram.com/rigrovergames/', '_blank');
                            });

                            document.getElementById('twiterrigrover').addEventListener('click', function() {
                            window.open('https://twitter.com/RigRoverGames', '_blank');
                            });

                            document.getElementById('facerigrover').addEventListener('click', function() {
                            window.open('https://www.facebook.com/profile.php?id=61556959637519', '_blank');
                            });

                            document.getElementById('youtuberigrover').addEventListener('click', function() {
                            window.open('https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg', '_blank');
                            });
                            </script>
                <ul>
                    <li>
                        <a href="fale_conosco">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade">Políticas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes">Termos e Condições</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>