<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Hardware para Jogos</title>
    <link rel="stylesheet" href="assents/css/ferramenta.css">
</head>

<body>

    <nav class="navbar">
        <ul>
            <li>
                <a href="index.php">Página Inicial</a>
            </li>
            <li>
                <a href="#">Quem Somos?</a>
            </li>
            <li>
                <a href="#">Noticias</a>
            </li>
        </ul>
    </nav>

    <div class="ferramenta-info">
        <h1> O QUE É ESSA FERRAMENTA?</h1>
        <h5>Essa ferramenta é capaz de analisar e dizer se sua máquina é capaz de rodar o jogo selecionado</h5>
    </div>

    <div class="ferramenta-analise">
        <form id="hardwareForm">
            <h1>Ferramenta de análise</h1>
            <label for="placaMae">Placa Mãe:</label>
            <input type="text" id="placaMae" name="placaMae" required><br><br>

            <label for="processador">Processador:</label>
            <input type="text" id="processador" name="processador" required><br><br>

            <label for="placaVideo">Placa de Vídeo:</label>
            <input type="text" id="placaVideo" name="placaVideo" required><br><br>

            <label for="ram">Memória RAM (GB):</label>
            <input type="number" id="ram" name="ram" required><br><br>

            <label for="armazenamento">Armazenamento (GB):</label>
            <input type="number" id="armazenamento" name="armazenamento" required><br><br>

            <label for="jogo">Selecione um jogo:</label>
            <select id="jogo" name="jogo">
                <option value="cyberpunk2077">Cyberpunk 2077</option>
                <option value="witcher3">The Witcher 3: Wild Hunt</option>
                <option value="gta5">Grand Theft Auto V</option>
            </select><br><br>

            <button type="submit">Verificar</button>
        </form>

        <div id="resultado"></div>

        <script>
            document.getElementById("hardwareForm").addEventListener("submit", function(event) {
                event.preventDefault();

                var placaMae = document.getElementById("placaMae").value;
                var processador = document.getElementById("processador").value;
                var placaVideo = document.getElementById("placaVideo").value;
                var ram = parseInt(document.getElementById("ram").value);
                var armazenamento = parseInt(document.getElementById("armazenamento").value);
                var jogoSelecionado = document.getElementById("jogo").value;

                var pcBomParaJogar = true;

                var resultadoDiv = document.getElementById("resultado");
                if (pcBomParaJogar) {
                    resultadoDiv.innerHTML = "<p>Seu PC é bom para jogar " + jogoSelecionado + "!</p>";
                } else {
                    resultadoDiv.innerHTML = "<p>Seu PC pode ter dificuldades para rodar " + jogoSelecionado + ".</p>";
                }
            });
        </script>
    </div>

    <footer>
        <div id="tudo-footer">
            <div class="conteudo-footer">
                <img src="img\mascoterigrover.png" alt="" class="img-footer">
                <ul>
                    <li>
                        <a href="#">Página Inicial</a>
                    </li>
                    <li>
                        <a href="#">Quem Somos?</a>
                    </li>
                    <li>
                        <a href="#">Noticias</a>
                    </li>
                </ul>
            </div>
            <div class="conteudo2-footer">
                <div>
                    <div class="redes-footer">

                        <a href="https://www.instagram.com/rigrovergames/"><img src="img\iconinstagram.png" alt=""></a>
                        <a href="https://twitter.com/RigRoverGames"><img src="img\iconx.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=61556959637519"><img src="img\iconfacebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCi9tZH0GeYkvskNO2d8mzIg"><img src="img\iconyoutube.png" alt=""></a>
                    </div>

                    <li>
                        <a href="fale_conosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="politicas_de_privacidade.html">Politicas de Privacidade</a>
                    </li>
                    <li>
                        <a href="termo_e_condicoes.html">Termos e Condições</a>
                    </li>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>