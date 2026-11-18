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

// Manejo del buscador
const buscador = document.getElementById('buscador');
const lista = document.getElementById('lista-bicicletas');

let temporizador;

buscador.addEventListener('input', function () {

    clearTimeout(temporizador);

    temporizador = setTimeout(() => {

        const search = buscador.value;

        fetch(`{{ route('bikes.index') }}?search=${encodeURIComponent(search)}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            lista.innerHTML = html;
        })
        .catch(error => {
            console.error('Error al buscar bicicletas:', error);
        });

    }, 300);

});