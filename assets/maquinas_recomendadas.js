const form = document.getElementById('hardwareForm');
const resultadoDiv = document.getElementById('resultado');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const pcSelecionado = form.pc.value;

    let configPC = '';
    switch (pcSelecionado) {
        case 'streaming':
            configPC = `
                <h2>Configurações para Streaming de Conteúdo:</h2>
                <ul>
                    <li>Processador: Intel Core i7 ou AMD Ryzen 7</li>
                    <li>Memória RAM: 16 GB DDR4</li>
                    <li>Placa de Vídeo: NVIDIA GeForce GTX 1660 Ti ou AMD Radeon RX 5600 XT</li>
                    <li>Armazenamento: SSD de 500 GB para sistema operacional e programas + HDD de 2 TB para armazenamento de vídeos e outros arquivos</li>
                    <li>Placa de Captura (opcional): Elgato Game Capture HD60 Pro</li>
                </ul>
            `;
            break;
        case 'gaming':
            configPC = `
                <h2>Configurações para Gaming de Alta Performance:</h2>
                <ul>
                    <li>Processador: Intel Core i9-11900K ou AMD Ryzen 9 5900X</li>
                    <li>Memória RAM: 32 GB DDR4</li>
                    <li>Placa de Vídeo: NVIDIA GeForce RTX 3080 ou AMD Radeon RX 6900 XT</li>
                    <li>Armazenamento: SSD NVMe de 1 TB para sistema operacional e jogos + HDD de 2 TB para armazenamento adicional</li>
                    <li>Monitor: Monitor de alta taxa de atualização (144Hz ou superior) e resolução 1440p ou 4K</li>
                </ul>
            `;
            break;
        case 'trabalho':
            configPC = `
                <h2>Configurações para Trabalho de Produtividade e Multitarefa:</h2>
                <ul>
                    <li>Processador: Intel Core i7-11700 ou AMD Ryzen 7 5800X</li>
                    <li>Memória RAM: 32 GB DDR4</li>
                    <li>Armazenamento: SSD NVMe de 1 TB para sistema operacional e programas + HDD de 4 TB para armazenamento de arquivos</li>
                    <li>Monitor: Monitor de alta resolução (Quad HD ou 4K) e tamanho adequado para multitarefa</li>
                </ul>
            `;
            break;
        case 'edicao_video':
            configPC = `
                <h2>Configurações para Edição de Vídeo Profissional:</h2>
                <ul>
                    <li>Processador: Intel Core i9-12900K ou AMD Ryzen 9 5950X</li>
                    <li>Memória RAM: 64 GB DDR4</li>
                    <li>Placa de Vídeo: NVIDIA GeForce RTX 3090 ou AMD Radeon RX 6900 XT</li>
                    <li>Armazenamento: SSD NVMe de 2 TB para sistema operacional e projetos de vídeo + SSD adicional de alta capacidade para armazenamento rápido de arquivos de mídia</li>
                    <li>Monitor: Monitor profissional de alta precisão de cores e resolução 4K</li>
                </ul>
            `;
            break;
        case 'design_grafico':
            configPC = `
                <h2>Configurações para Design Gráfico e Criação de Conteúdo:</h2>
                <ul>
                    <li>Processador: Intel Core i7-12700K ou AMD Ryzen 7 5800X</li>
                    <li>Memória RAM: 32 GB DDR4</li>
                    <li>Placa de Vídeo: NVIDIA GeForce RTX 3070 ou AMD Radeon RX 6800 XT</li>
                    <li>Armazenamento: SSD NVMe de 1 TB para sistema operacional e aplicativos criativos + HDD de 2 TB para armazenamento de projetos e arquivos de mídia</li>
                    <li>Monitor: Monitor com alta precisão de cores e resolução Quad HD ou 4K</li>
                </ul>
            `;
            break;
        case 'office':
            configPC = `
                <h2>Configurações para Uso de Escritório Básico:</h2>
                <ul>
                    <li>Processador: Intel Core i3 ou AMD Ryzen 3</li>
                    <li>Memória RAM: 8 GB DDR4</li>
                    <li>Armazenamento: SSD de 256 GB para sistema operacional e programas</li>
                    <li>Monitor: Monitor Full HD</li>
                </ul>
            `;
            break;
        case 'estudante':
            configPC = `
                <h2>Configurações para Uso de Estudante:</h2>
                <ul>
                    <li>Processador: Intel Core i5 ou AMD Ryzen 5</li>
                    <li>Memória RAM: 16 GB DDR4</li>
                    <li>Armazenamento: SSD de 512 GB para sistema operacional e programas</li>
                    <li>Monitor: Monitor Full HD</li>
                </ul>
            `;
            break;
        default:
            configPC = '<p>Por favor, selecione um tipo de computador válido.</p>';
            break;
    }

    resultadoDiv.innerHTML = configPC;
});
