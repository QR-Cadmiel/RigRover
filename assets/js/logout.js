function confirmLogout() {
    if (confirm("Tem certeza de que deseja sair da sessão?")) {
        window.location.href = "logout.php";
    } else {
    }
}

function confirmLogout2() {
    if (confirm("Tem certeza de que deseja sair da sessão?")) {
        window.location.href = "../logout.php";
    } else {
    }
}

