const WebSocket = require('ws');

const wss = new WebSocket.Server({ port: 8080 });

// Array para armazenar conexões de clientes
const clients = [];

wss.on('connection', function connection(ws) {
    console.log('Nova conexão estabelecida');

    // Adicionar novo cliente à lista de clientes
    clients.push(ws);

    // Quando uma mensagem é recebida de um cliente
    ws.on('message', function incoming(message) {
        console.log('Mensagem recebida:', message.toString()); // Convertendo o buffer para string

        // Enviar a mensagem recebida para todos os clientes
        clients.forEach(function each(client) {
            if (client.readyState === WebSocket.OPEN) {
                client.send(message.toString()); // Convertendo o buffer para string
            }
        });
    });

    // Quando a conexão é fechada
    ws.on('close', function close() {
        console.log('Conexão fechada');
        // Remover cliente da lista de clientes
        clients.splice(clients.indexOf(ws), 1);
    });
});
