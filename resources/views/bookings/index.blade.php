@extends('layouts.app')

@section('content')
    <div>

        <h1>Mis reservas</h1>

        <!-- Mensajes de éxito -->
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <!-- Mensajes de error -->
        @if (session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif

        <!-- Comprobar si existen reservas -->
        @if ($bookings->isEmpty())

            <p>Todavía no tienes ninguna reserva.</p>

            <a href="{{ route('bikes.index') }}">
                Consultar bicicletas disponibles
            </a>

        @else

            @foreach ($bookings as $booking)

                <div>

                    <h2>{{ $booking->bike?->model ?? 'Bicicleta no disponible' }}</h2>

                    <div>
                        <strong>Número de serie:</strong>
                        {{ $booking->bike?->serial_number ?? 'No disponible' }}
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

                    <br>

                    <!-- Consultar detalles -->
                    <a href="{{ route('bookings.show', $booking->id) }}">
                        Ver detalles
                    </a>

                    <!-- Cancelar reserva -->
                    @if ($booking->status === 'pending')

                        <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST">

                            @csrf
                            @method('PATCH')

                            <button type="submit">
                                Cancelar reserva
                            </button>

                        </form>

                    @endif

                </div>

                <hr>

            @endforeach

        @endif

        <br>

        <a href="{{ route('bikes.index') }}">
            Volver al catálogo de bicicletas
        </a>

    </div>

@endsection