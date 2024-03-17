import { Calendar } from '@fullcalendar/core';
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
                adicionarLembrete(date, descricao);
            }
        },
        events: 'carregar_lembretes.php'
    });
    calendar.render();

    document.getElementById('formLembrete').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const data = document.getElementById('data').value;
        const descricao = document.getElementById('descricao').value;

        adicionarLembrete(data, descricao);
    });

    function adicionarLembrete(data, descricao) {
        fetch('calendario.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                'data': data,
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
});
