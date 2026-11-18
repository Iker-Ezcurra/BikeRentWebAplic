@extends('layouts.app')

@section('content')

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

        <a href="{{ route('bookings.create', $bike->id) }}">
            Reservar
        </a>

        <a href="{{ route('bikes.index') }}" class="">
            Volver al catálogo
        </a>

    </div>

@endsection