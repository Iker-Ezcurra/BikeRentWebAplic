@extends('layouts.app')

@section('body-class', 'bike-page')

@section('content')

    <div class="bike__card">

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

        <x-primary-button onclick="window.location.href='{{ route('bookings.create', $bike->id) }}'" class="standar-button">
            Reservar
        </x-primary-button>

        <x-primary-button onclick="window.location.href='{{ route('bikes.index') }}'" class="button-back">
            ←
        </x-primary-button>

    </div>

@endsection