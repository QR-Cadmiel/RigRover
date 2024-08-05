// dropdownuser.js

document.addEventListener('DOMContentLoaded', (event) => {
    const dropdown = document.querySelector('.dropdown');
    const dropdownBtn = dropdown.querySelector('.dropbtn');
    
    dropdownBtn.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

    // Fechar o dropdown se clicar fora dele
    document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('active');
        }
    });
});
