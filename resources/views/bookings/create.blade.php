@extends('layouts.app')

@section('body-class', 'booking-page')

@section('content')

    <div class="booking__card">

        <h1>Reservar bicicleta</h1>

        <!-- Información de la bicicleta -->
        <div>

            <h2>{{ $bike->model }}</h2>

            <div>
                <span>Número de serie:</span>
                {{ $bike->serial_number }}
            </div>

            <div>
                <span>Precio por hora:</span>
                {{ number_format($bike->price_per_hour, 2) }} €
            </div>

        </div>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div>
                <strong>Se han producido errores:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de reserva -->
        <form action="{{ route('bookings.store') }}" method="POST">

            @csrf

            <input type="hidden" name="bike_id" value="{{ $bike->id }}">

            <div>

                <label for="start_time">Fecha y hora de inicio:</label>

                <input
                    type="datetime-local"
                    id="start_time"
                    name="start_time"
                    value="{{ old('start_time') }}"
                    min="{{ now()->format('Y-m-d\TH:i') }}"
                    required
                >

            </div>

            <div>

                <label for="end_time">Fecha y hora de finalización:</label>

                <input
                    type="datetime-local"
                    id="end_time"
                    name="end_time"
                    value="{{ old('end_time') }}"
                    required
                >

            </div>

            <button type="submit" class="standar-button">
                Confirmar reserva
            </button>

        </form>

        <x-primary-button onclick="window.location.href='{{ route('bikes.show', $bike->id) }}'" class="button-back">
            ←
        </x-primary-button>

    </div>

    @endsection