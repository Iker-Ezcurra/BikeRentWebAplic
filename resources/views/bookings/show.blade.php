<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la reserva</title>
</head>

<body>

    <div>

        <h1>Detalles de la reserva</h1>

        <!-- Información de la reserva -->

        <div>

            <h2>Reserva #{{ $booking->id }}</h2>

            <div>
                <strong>Bicicleta:</strong>
                {{ $booking->bike->model }}
            </div>

            <div>
                <strong>Número de serie:</strong>
                {{ $booking->bike->serial_number }}
            </div>

            <div>
                <strong>Fecha de inicio:</strong>
                {{ $booking->start_time->format('d/m/Y H:i') }}
            </div>

            <div>
                <strong>Fecha de finalización:</strong>
                {{ $booking->end_time->format('d/m/Y H:i') }}
            </div>

            <div>
                <strong>Precio total:</strong>
                {{ number_format($booking->total_cost, 2) }} €
            </div>

            <div>
                <strong>Estado:</strong>

                @if ($booking->status === 'pending')
                    Pendiente
                @elseif ($booking->status === 'active')
                    Activa
                @elseif ($booking->status === 'completed')
                    Completada
                @elseif ($booking->status === 'cancelled')
                    Cancelada
                @endif

            </div>

        </div>

        <br>

        <!-- Botón para cancelar la reserva -->

        @if ($booking->status === 'pending')

            <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST">

                @csrf
                @method('PATCH')

                <button type="submit">
                    Cancelar reserva
                </button>

            </form>

        @endif

        <br>

        <!-- Volver al historial -->

        <a href="{{ route('bookings.index') }}">
            Volver a mis reservas
        </a>

        <br><br>

        <a href="{{ route('bikes.index') }}">
            Volver al catálogo de bicicletas
        </a>

    </div>

</body>

</html>