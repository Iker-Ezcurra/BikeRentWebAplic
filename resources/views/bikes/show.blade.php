<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la bicicleta</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
        }

        .bike-details {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
            color: #222;
        }

        .detail {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .back-button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 18px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .back-button:hover {
            background: #555;
        }
    </style>
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

        <a href="{{ route('bikes.index') }}" class="back-button">
            Volver al catálogo
        </a>

    </div>

</body>
</html>