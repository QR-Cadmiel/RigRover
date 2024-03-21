<?php
session_start();

include 'conexao.php';

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = $_POST['data'];
  $descricao = $_POST['descricao'];

  if (empty($data) || empty($descricao)) {
    echo 'Por favor, preencha todos os campos do formulário.';
  } else {
    $sql = "INSERT INTO lembretes (data, descricao) VALUES (?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
      $stmt->bind_param('ss', $data, $descricao);
      if ($stmt->execute()) {
        echo "Lembrete adicionado com sucesso!";
      } else {
        echo "Erro ao adicionar lembrete: " . $stmt->error;
      }
      $stmt->close();
    } else {
      echo 'Erro ao preparar a declaração: ' . $mysqli->error;
    }
  }
}

$dataSelecionada = $_GET['data'] ?? null;

$sql = "SELECT id, data, descricao FROM lembretes WHERE data = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $dataSelecionada);
$stmt->execute();
$result = $stmt->get_result();

$events = [];

if ($result) {
  while ($row = $result->fetch_assoc()) {
    $event = [
      'id' => $row['id'],
      'title' => $row['descricao'],
      'start' => $row['data'],
    ];
    $events[] = $event;
  }
  $result->free();
} else {
  echo "Erro ao recuperar lembretes: " . $mysqli->error;
}

$mysqli->close();

echo json_encode($events);
?>

<!DOCTYPE html>
<html>

<head>
  <script src="assents/calendario.js"></script>
  <script type='importmap'>
    {
        "imports": {
          "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.11",
          "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.11"
        }
      }
    </script>
  <script type='module'>
    import {
      Calendar
    } from '@fullcalendar/core';
    import dayGridPlugin from '@fullcalendar/daygrid';

    document.addEventListener('DOMContentLoaded', function() {
      const calendarEl = document.getElementById('calendar');
      const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin],
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        dateClick: function(info) {
          const date = info.dateStr;
          const descricao = prompt("Digite a descrição do lembrete:");
          if (descricao !== null) {
            fetch('calendario.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                  'data': date,
                  'descricao': descricao
                })
              })
              .then(response => response.text())
              .then(data => {
                console.log(data);
                calendar.refetchEvents();
              })
              .catch(error => {
                console.error('Erro ao adicionar lembrete:', error);
              });
          }
        },
        events: 'carregar_lembretes.php'
      });
      calendar.render();
    });
  </script>
</head>

<body>
  <div id='calendar'></div>

  <form id="formLembrete" action="calendario.php" method="post">
    <label for="data">Data:</label>
    <input type="date" id="data" name="data">
    <br>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao"></textarea>
    <br>
    <button type="submit">Adicionar Lembrete</button>
  </form>


</body>

</html>