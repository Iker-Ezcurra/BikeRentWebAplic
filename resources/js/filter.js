document.addEventListener('DOMContentLoaded', function () {

    const bikeList = document.getElementById('lista-bicicletas');
    const filterStatus = document.getElementById('filtroDisponibilidad');

    filterStatus.addEventListener('change', function () {

        const selectedStatus = this.value;

        const bikes = bikeList.querySelectorAll('.bike__card');

        bikes.forEach(bike => {

            const status = bike.dataset.status;

            if (selectedStatus === 'todas') {
                bike.style.display = '';

            } else if (selectedStatus === 'disponible' && status !== 'maintenance') {
                bike.style.display = '';

            } else if (selectedStatus === 'no-disponible' && status === 'maintenance') {
                bike.style.display = '';

            } else {
                bike.style.display = 'none';
            }

        });

    });

});