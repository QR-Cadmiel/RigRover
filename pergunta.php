<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat em Tempo Real</title>
</head>
<body>
<div id="chat-box" style="height: 300px; overflow-y: scroll;"></div>
<input type="text" id="message-input">
<button onclick="sendMessage()">Enviar</button>

<script>
// Criar uma conexão WebSocket
var socket = new WebSocket("ws://localhost:8080");

// Quando a conexão é aberta
socket.onopen = function(event) {
    console.log("Conexão estabelecida");
};

// Quando uma mensagem é recebida do servidor
socket.onmessage = function(event) {
    var chatBox = document.getElementById("chat-box");
    chatBox.innerHTML += "<p>" + event.data + "</p>";
    chatBox.scrollTop = chatBox.scrollHeight;
};

function sendMessage() {
    var message = document.getElementById("message-input").value;
    // Enviar a mensagem para o servidor via WebSocket
    socket.send(message);
    // Limpar o campo de entrada
    document.getElementById("message-input").value = "";
}
</script>
</body>
</html>
