@extends('layouts.app')

@section('content')

    <h1>Listado de bicicletas</h1>

    <div>

        @forelse($bikes as $bike)

            <div>

                <h2>{{ $bike->model }}</h2>

                <p><strong>ID:</strong> {{ $bike->id }}</p>

                <p>
                    <strong>Número de serie:</strong>
                    {{ $bike->serial_number }}
                </p>

                <p>
                    {{ number_format($bike->price_per_hour, 2) }} €/hora
                </p>

                <p>
                    <strong>Estado:</strong>
                    {{ ucfirst($bike->status) }}
                </p>

                <a href="{{ route('bikes.show', $bike->id) }}">
                    Ver información
                </a>

            </div>

        @empty

            <p>No hay bicicletas disponibles.</p>

        @endforelse

    </div>

@endsection