<!-- pergunta.php -->
<?php
// Verificar se o parâmetro id está presente na URL
if (!isset($_GET['id'])) {
    // Redirecionar para a página inicial se não houver ID de pergunta
    header("Location: index.php");
    exit();
}

// ID da pergunta
$pergunta_id = $_GET['id'];

// Aqui você faria a lógica para recuperar o histórico de conversas da pergunta do banco de dados
// Por enquanto, vamos simular um histórico de conversas
$historico_conversas = array(
    array("usuario" => "Usuário 1", "mensagem" => "Primeira mensagem de exemplo."),
    array("usuario" => "Usuário 2", "mensagem" => "Segunda mensagem de exemplo."),
    array("usuario" => "Usuário 3", "mensagem" => "Terceira mensagem de exemplo.")
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussão: <?php echo $pergunta_id; ?></title>
    <link rel="stylesheet" href="assets/css/forum.css">
</head>

<body>

    <div class="rigrover-1">
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
        <div class="main-content">
            <h2><?php echo $pergunta_id; ?></h2>

            <h3>Histórico de Conversas</h3>
            <div class="historico-conversas" id="historico-conversas">
                <?php
                // Exibir o histórico de conversas
                foreach ($historico_conversas as $conversa) {
                    echo '<div class="conversa">';
                    echo '<strong>' . $conversa["usuario"] . ':</strong> ' . $conversa["mensagem"];
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Formulário para adicionar uma nova mensagem -->
            <form id="formulario-mensagem">
                <label for="mensagem">Sua mensagem:</label><br>
                <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <footer>
            <div id="tudo-footer">
                <!-- Conteúdo do footer -->
            </div>
        </footer>

    </div>

    <!-- Incluir scripts do Firebase -->
    <script src="https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.6/firebase-database.js"></script>

    <script>
        // Configurações do Firebase
        var firebaseConfig = {
            apiKey: "SUA_API_KEY",
            authDomain: "SEU_DOMÍNIO.firebaseapp.com",
            databaseURL: "https://SEU_DOMÍNIO.firebaseio.com",
            projectId: "SEU_PROJECT_ID",
            storageBucket: "SEU_STORAGE_BUCKET",
            messagingSenderId: "SEU_MESSAGING_SENDER_ID",
            appId: "SEU_APP_ID"
        };

        // Inicializar o Firebase
        firebase.initializeApp(firebaseConfig);

        var database = firebase.database();

        // Listener para receber novas mensagens
        database.ref('mensagens/<?php echo $pergunta_id; ?>').on('child_added', function(snapshot) {
            var mensagem = snapshot.val();
            var conversaHTML = '<div class="conversa"><strong>' + mensagem.usuario + ':</strong> ' + mensagem.mensagem + '</div>';
            document.getElementById('historico-conversas').innerHTML += conversaHTML;
        });

        // Evento de envio do formulário de mensagem
        document.getElementById('formulario-mensagem').addEventListener('submit', function(e) {
            e.preventDefault(); // Evitar o comportamento padrão de envio de formulário

            // Obter o valor da mensagem do formulário
            var mensagem = document.getElementById('mensagem').value;

            // Adicionar a mensagem ao banco de dados
            database.ref('mensagens/<?php echo $pergunta_id; ?>').push({
                usuario: 'Nome do Usuário', // Aqui você substituiria pelo nome do usuário atual
                mensagem: mensagem
            });

            // Limpar o campo de mensagem após o envio
            document.getElementById('mensagem').value = '';
        });
    </script>

</body>

</html>

<!-- // Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyA3ebEzmIA0ACFkyVmjKpA3JnlsNuR-KiQ",
  authDomain: "projeto-rig-rover-pesquisa.firebaseapp.com",
  projectId: "projeto-rig-rover-pesquisa",
  storageBucket: "projeto-rig-rover-pesquisa.appspot.com",
  messagingSenderId: "250895028578",
  appId: "1:250895028578:web:1cd2f0cdcd88905a30dc3b",
  measurementId: "G-PNS61PFSY6"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app); -->