@extends('layouts.app')

@section('body-class', 'booking-page')

@section('content')
    <div>

        <h1 class="title">Mis reservas</h1>

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

        <div class="bookings__container">

            @foreach ($bookings as $booking)

                <div class="booking__card">

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

                    <div class="booking-buttons">

                        <!-- Consultar detalles -->
                        <x-primary-button
                            onclick="window.location.href='{{ route('bookings.show', $booking->id) }}'"
                            class="standar-button">
                            Ver detalles
                        </x-primary-button>

                        <!-- Cancelar reserva -->
                        @if ($booking->status === 'pending')

                            <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <button type="submit" class="cancel-button">
                                    Cancelar reserva
                                </button>
                            </form>

                        @endif

                    </div>

                </div>

            @endforeach
        </div>

        @endif

        <br>

        <x-primary-button onclick="window.location.href='{{ route('bikes.index') }}'" class="button-back">
            ←
        </x-primary-button>
    </div>

@endsection