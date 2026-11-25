@extends('layouts.app')

@section('body-class', 'bike-page')

@section('content')

    <div class="bike__card">

        <h1 class="title">{{ $bike->model }}</h1>

        <div class="info">
            <span class="bike__label">ID:</span>
            {{ $bike->id }}
        </div>

        <div class="info">
            <span class="bike__label">Número de serie:</span>
            {{ $bike->serial_number }}
        </div>

        <div class="info">
            <span class="bike__label">Modelo:</span>
            {{ $bike->model }}
        </div>

        <div class="info">
            <span class="bike__label">Precio por hora:</span>
            {{ number_format($bike->price_per_hour, 2) }} €
        </div>

        <div class="info">
            <span class="bike__label">Estado:</span>
            {{ $bike->status }}
        </div>

        <x-primary-button onclick="window.location.href='{{ route('bookings.create', $bike->id) }}'" class="standar-button">
            Reservar
        </x-primary-button>

        <x-primary-button onclick="window.location.href='{{ route('bikes.index') }}'" class="button-back">
            ←
        </x-primary-button>

    </div>

@endsection