<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['email'] !== 'admin@gmail.com') {
    header("Location: home.php");
    exit;
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
    <link rel="stylesheet" href="assets/css/noticiasadm.css">
    <link rel="stylesheet" href="assets\css\responsividade\noticias-responsivo.css">
    <script src="assets/js/hamburguinho.js"></script>
    <link rel="shortcut icon" type="imagex/png" href="assets/img/logourl.png">
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
                        <a href="comparar_hardwares" id="btn-nav">Hardware</a>
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
                    <a href="home">Página Inicial</a>
                    <a href="noticias">Notícias</a>
                    <a href="eventos">Eventos</a>
                    <a href="forum">Fórum</a>
                    <a href="comparar_hardwares">Hardware</a>
                    <a href="games.php">Wiki Jogos</a>
                    <a href="logout">Deslogar da Conta</a>
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
                   
               
                    <form method="post" action="">
                    <div class="criar-noticia">
                    <h3>Criar Nova Notícia</h3>
                        <div class="tipo-criar">
                            <select id="tipo" name="tipo">
                                <option value="games">Games</option>
                                <option value="eventos">Eventos</option>
                                <option value="hardwares">Hardwares</option>
                            </select>
                        </div>
                        
                            <div class="titulo-criar">

                                <textarea type="text"  placeholder="Digite o título da notícia" id="titulo" name="titulo" required></textarea>
                            </div>
                            <div class="descricao-criar">

                                <textarea id="descricao"  placeholder="Digite a descrição dela" name="descricao" rows="4" required></textarea>
                            </div>
                            <div class="imagem-criar">
                                <textarea type="text" id="imagem" placeholder="Insira a URL da imagem"  name="imagem" required></textarea>
                            </div>
                        </div>
                        <input class="btn-criar" type="submit" value="Criar Notícia">
                    </form>

                    <?php foreach ($noticia as $noticias): ?>
                        <div class="ntc-pergunta categoria-<?php echo strtolower($noticias['tipo']); ?>"
                        style="color: white; ">
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

                            <?php if ($_SESSION['email'] === 'admin@gmail.com') { ?>
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
                            var categoriaNoticia = noticia.classList[1];
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

                    function editarNoticia(id) {
                        window.location.href = "editar_noticia?id=" + id;
                    }

                    function excluirNoticia(id) {
    swal({
        title: "Tem certeza?",
        text: "Você realmente deseja excluir esta notícia?",
        icon: "warning",
        buttons: ["Cancelar", "Confirmar"],
        dangerMode: true,
    }).then((confirmacao) => {
        if (confirmacao) {
            // Exclui a notícia e exibe o Toast após a exclusão
            window.location.href = "excluir_noticia?id=" + id;
            window.addEventListener('load', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "Notícia excluída com sucesso"
                });
            });
        } else {
            // Ação a ser tomada se o usuário cancelar
            swal("A notícia não foi excluída.", {
                icon: "info",
            });
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