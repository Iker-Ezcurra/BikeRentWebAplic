<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la bicicleta</title>
</head>

<body>

    <div class="">

        <h1>{{ $bike->model }}</h1>

        <div class="">
            <span class="">ID:</span>
            {{ $bike->id }}
        </div>

        <div class="">
            <span class="">Número de serie:</span>
            {{ $bike->serial_number }}
        </div>

        <div class="">
            <span class="">Modelo:</span>
            {{ $bike->model }}
        </div>

        <div class="">
            <span class="">Precio por hora:</span>
            {{ number_format($bike->price_per_hour, 2) }} €
        </div>

        <div class="">
            <span class="">Estado:</span>
            {{ $bike->status }}
        </div>

        <a href="{{ route('bikes.index') }}" class="">
            Volver al catálogo
        </a>

    </div>

</body>
</html>