<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la bicicleta</title>
</head>

<body>

    <div class="bike-details">

        <h1>{{ $bike->model }}</h1>

        <div class="detail">
            <span class="label">ID:</span>
            {{ $bike->id }}
        </div>

        <div class="detail">
            <span class="label">Número de serie:</span>
            {{ $bike->serial_number }}
        </div>

        <div class="detail">
            <span class="label">Modelo:</span>
            {{ $bike->model }}
        </div>

        <div class="detail">
            <span class="label">Precio por hora:</span>
            {{ number_format($bike->price_per_hour, 2) }} €
        </div>

        <div class="detail">
            <span class="label">Estado:</span>
            {{ $bike->status }}
        </div>

        <a href="{{ route('bookings.create', $bike->id) }}">
            Reservar
        </a>

        <a href="{{ route('bikes.index') }}" class="back-button">
            Volver al catálogo
        </a>

    </div>

</body>
</html>