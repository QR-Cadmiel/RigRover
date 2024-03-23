<?php

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require __DIR__ . '/vendor/autoload.php';

class WebSocketServer implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        // Método chamado quando uma nova conexão é estabelecida
        echo "Nova conexão\n";
        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        // Método chamado quando uma mensagem é recebida
        echo "Mensagem recebida de um cliente: $msg\n";
        foreach ($this->clients as $client) {
            $client->send($msg);
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        // Método chamado quando a conexão é fechada
        echo "Conexão fechada\n";
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        // Método chamado quando ocorre um erro na conexão
        echo "Erro na conexão: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Criar servidor WebSocket
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WebSocketServer()
        )
    ),
    8080 // Porta do servidor WebSocket (pode ser alterada)
);

echo "Servidor WebSocket iniciado\n";

// Iniciar o servidor
$server->run();
