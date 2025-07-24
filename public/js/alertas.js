function cerrarAlerta(boton) {
    const alerta = boton.parentElement;
    if (alerta) {
        alerta.classList.add('oculto');
        setTimeout(() => {
            alerta.style.display = 'none';
        }, 500);
    }
}

function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('show');
    }
