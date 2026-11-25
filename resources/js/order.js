document.addEventListener('DOMContentLoaded', function () {

    const bikeList = document.getElementById('lista-bicicletas');
    const sortPrice = document.getElementById('ordenarPrecio');

    let ascending = true;

    sortPrice.addEventListener('click', function () {

        const bikes = Array.from(
            bikeList.querySelectorAll('.bike__card')
        );

        bikes.sort((a, b) => {

            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);

            return ascending
                ? priceA - priceB
                : priceB - priceA;

        });

        bikes.forEach(bike => bikeList.appendChild(bike));

        ascending = !ascending;

        sortPrice.textContent = ascending
            ? 'Ordenar por precio ↑'
            : 'Ordenar por precio ↓';

    });

});