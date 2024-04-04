<?php
// Declare o namespace antes de qualquer outra declaração
namespace MyApp;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

// Código PHP para lidar com a lógica do servidor WebSocket usando Ratchet PHP
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require dirname(__DIR__) . '\Rigrover\vendor\autoload.php';

class Chat implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = [];
    }

    public function generateUniqueId()
    {
        return uniqid();
    }

    public function onOpen(ConnectionInterface $conn)
    {
        // Generate a unique ID for this connection
        $resourceId = $this->generateUniqueId();

        // Attach the connection to the array with the generated ID
        $this->clients[$resourceId] = $conn;

        echo "Nova conexão! ({$resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        foreach ($this->clients as $resourceId => $client) {
            if ($client !== $from) {
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        // Remove the connection from the array when it closes
        foreach ($this->clients as $resourceId => $client) {
            if ($client === $conn) {
                unset($this->clients[$resourceId]);
                break;
            }
        }

        echo "Conexão fechada\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Ocorreu um erro: {$e->getMessage()}\n";
        $conn->close();
    }
}

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

$server->run();
