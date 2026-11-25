// Manejo de clic en las tarjetas de bicicletas
let cartas = document.querySelectorAll('.bike__card');

cartas.forEach(carta => {
    carta.addEventListener('click', () => {
        let enlace = carta.querySelector('a');

        if (enlace) {
            window.location.href = enlace.href;
        }
    });
});
