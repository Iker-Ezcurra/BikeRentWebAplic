<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de bicicletas</title>
</head>

<body>

    <h1>Listado de bicicletas</h1>

    <div class="bike-container">

        @foreach($bikes as $bike)

            <div class="bike-card">

                <h2>{{ $bike->model }}</h2>

                <p><strong>ID:</strong> {{ $bike->id }}</p>

                <p><strong>Número de serie:</strong>
                    {{ $bike->serial_number }}
                </p>

                <p class="price">
                    {{ number_format($bike->price_per_hour, 2) }} €/hora
                </p>

                <p>
                    <strong>Estado:</strong>

                    <span class="status {{ $bike->status }}">
                        {{ ucfirst($bike->status) }}
                    </span>
                </p>

                <a href="{{ route('bikes.show', $bike->id) }}">
                    Ver información
                </a>

            </div>

        @endforeach

    </div>

</body>
</html>