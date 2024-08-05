function confirmLogout() {
    Swal.fire({
        title: "Deseja sair da conta?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair!",
        cancelButtonText: "Cancelar",
        background: "#1a1818",
        customClass: {
            title: 'custom-title'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "logout.php";
        }
    });
}

function confirmLogout2() {
    Swal.fire({
        title: "Deseja sair da conta?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair!",
        cancelButtonText: "Cancelar",
        background: "#1a1818",
        customClass: {
            title: 'custom-title'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../logout.php";
        }
    });
}

// Adicione o estilo diretamente no JavaScript
const style = document.createElement('style');
style.innerHTML = `
    .custom-title {
        color: white;
    }
`;
document.head.appendChild(style);


