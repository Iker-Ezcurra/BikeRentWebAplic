<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de bicicletas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .bike-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: auto;
        }

        .bike-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .bike-card:hover {
            transform: translateY(-5px);
        }

        .bike-card h2 {
            color: #333;
            margin-top: 0;
        }

        .bike-card p {
            color: #666;
            margin: 12px 0;
        }

    </style>
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