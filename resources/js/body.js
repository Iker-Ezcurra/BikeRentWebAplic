const body = document.body;

if (body.classList.contains('bike-page')) {
    console.log('Estamos en la página de bicicletas');
} else if (body.classList.contains('booking-page')) {
    console.log('Estamos en la página de reservas');
}